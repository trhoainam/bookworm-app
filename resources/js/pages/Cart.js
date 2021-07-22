import React from 'react';
import { useState, useEffect } from 'react';
import CartDetailContent from '../components/Cart/CartDetailContent';
import CartDetailHeader from '../components/Cart/CartDetailHeader';
import CartTotal from '../components/Cart/CartTotal';
import Dialog from '../components/Dialog/Dialog';


export default function Cart(props) {
    const [isOpen, setIsOpen] = useState(false);
    const [cartItems, setCartItems] = useState(props.cartItems);
    useEffect(() => {
        const cart = localStorage.getItem('cartItems') ? JSON.parse(localStorage.getItem('cartItems')) : [];
        setCartItems(cart);
    }, [])
    useEffect(() => {
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        handleCartChange(cartItems);
    }, [cartItems])
    const handleCartChange = (cartItems) => {
        props.onCartChange(cartItems);
    }
    const handleChange = (product, count) => {
        const exist = cartItems.find((x) => x.id === product.id);
        if (exist) {
            let tmpCart=cartItems;
            
            tmpCart.map((x) => {
                return x = (x.id === product.id ? { ...product, qty: (x.qty + count - x.qty) } : x);
            });
            let index=-1;
            tmpCart.map((x,i) => {
                return index= x.id === product.id ? i: index;
            });
            if(index>-1&&count==0){
                tmpCart.splice(index, 1);
            }
            setCartItems(
                cartItems.map((x) => {
                    return x = (x.id === product.id ? { ...product, qty: (x.qty + count - x.qty) } : x);
                }))
        }
    }
    const placeOrder = async (event) => {
        let books = [];
        cartItems.map((item) => {
            books.push({ id: item.id, qty: item.qty });
        })
        const params = {
            books: books
        }
        const res = await axios.post("http://127.0.0.1:8000/api/place-order", params)
            .then((ketqua) => {
                setCartItems([]);
                setIsOpen(true);
                window.setTimeout(function () {
                    window.location = "/";
                }, 10000);
            })
            .catch((err) => {
                alert(err);
            });
    }
    const onPlaceOrder = () => {
        placeOrder();
    }
    return (
        <>
            <div>
                <div className="cart-header mt-4" style={{ display: 'flex', marginBottom: '30px' }}><b className="h4">Your cart : {cartItems ? cartItems.length : 0} item(s)</b> </div>
                <div className="cart-content">
                    <div className="row">
                        <div className="col-sm-8 ">
                            <div className="cart-detail">
                                <CartDetailHeader />
                                <div className="row cart-detail-content">
                                    {cartItems ? cartItems.map((item, index) => {
                                        return (<CartDetailContent cartItem={item} key={index} handleChange={handleChange} />)
                                    }) : ''}
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-4">
                            <CartTotal cartItems={cartItems} onPlaceOrder={onPlaceOrder} />
                        </div>
                    </div>
                </div>
                <Dialog isOpen={isOpen} onClose={(e) => { setIsOpen(false); window.location = "/"; }}>
                    Đặt Hàng Thành Công !!!
                </Dialog>
            </div>
        </>
    )
}
