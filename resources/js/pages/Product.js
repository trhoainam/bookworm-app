import React from 'react';
import { useState, useEffect } from 'react';
import {
    useParams,
} from "react-router-dom";
import ProductDetail from './../components/Product/ProductDetail';
import ProductTotal from './../components/Product/ProductTotal';
import ReviewForm from './../components/Review/ReviewForm';
import ReviewView from './../components/Review/ReviewView';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

toast.configure();

export default function Product(props) {
    let { id } = useParams();
    const [cartItems, setCartItems] = useState([]);
    const [bookInfo, setBookInfo] = useState();
    const [url, setUrl] = useState("http://127.0.0.1:8000/resources/assets/bookcover/book1.jpg");
    const [reRender,setReRender] = useState(false);

    const getBookInfo = async (event) => {
        const res = await axios.get(`http://127.0.0.1:8000/api/books/${id}`)
            .then((ketqua) => {
                if (ketqua.status != 200) {
                    window.location = "/error";
                } else {
                    setBookInfo(ketqua.data);
                    if (ketqua.data[0].book_cover_photo) {
                        setUrl(`http://127.0.0.1:8000/resources/assets/bookcover/` + ketqua.data[0].book_cover_photo + `.jpg`)
                    }
                }
            })
            .catch((err) => {
                window.location = "/error";
            });
    }
    useEffect(() => {
        const cart = localStorage.getItem('cartItems') ? JSON.parse(localStorage.getItem('cartItems')) : [];
        setCartItems(cart);
        getBookInfo();
    }, []);
    useEffect(() => {
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        handleChange(cartItems);
    }, [cartItems])
    const handleChange = (cartItems) => {
        props.onCartChange(cartItems);
    }
    const onAdd = (product, number) => {
        const exist = cartItems.find((x) => x.id === product.id);
        if (exist) {
            console.log('update lại item cũ')
            setCartItems(
                cartItems.map((x) => {
                    return x = (x.id === product.id ? { ...product, qty: (x.qty + number) > 8 ? 8 : (x.qty + number), url: url } : x);
                }))
        } else {
            console.log('item mới');
            setCartItems([...cartItems, { ...product, qty: number, url: url }]);
        }
        toast(`Đã thêm vào giỏ hàng : quyển ${product.book_title} `,{position: toast.POSITION.TOP_RIGHT,autoClose:5000});
    }
    const handleSubmit=()=>{
        setReRender(!reRender);
    }
    return (
        <>
            <div className="product-header mt-4" style={{ display: "flex" }}>
                <b className="h4">{bookInfo ?
                    (bookInfo[0].category.category_name[0].toUpperCase() + bookInfo[0].category.category_name.slice(1))
                    : 'Category'}</b>
            </div>
            <div className="product-content">
                <div className="row">
                    <div className="col-sm-8 ">
                        <ProductDetail id={id} bookInfo={bookInfo} url={url} />
                    </div>
                    <div className="col-sm-4">
                        <ProductTotal id={id} bookInfo={bookInfo} url={url} onAdd={onAdd} />
                    </div>
                </div>
            </div>

            <div className="review-content">
                <div className="row">
                    <div className="col-sm-8 ">
                        <div className="read-review" style={{ position: 'relative' }}>
                            <ReviewView id={id} reRender={reRender}/>
                        </div>
                    </div>
                    <div className="col-sm-4">
                        <div className="write-review">
                            <ReviewForm id={id} handleSubmit={handleSubmit}/>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}