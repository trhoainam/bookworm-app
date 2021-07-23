import React from 'react';
import { useState, useEffect } from 'react';
import {
    useParams,
} from "react-router-dom";
import ProductDetail from './../components/Product/ProductDetail';
import ProductTotal from './../components/Product/ProductTotal';
import ReviewForm from './../components/Review/ReviewForm';
import ReviewView from './../components/Review/ReviewView';

export default function Product(props) {
    let { id } = useParams();
    const [cartItems, setCartItems] = useState([]);
    const [bookInfo, setBookInfo] = useState();
    const [url, setUrl] = useState("http://127.0.0.1:8000/resources/assets/bookcover/book1.jpg");

    const getBookInfo = async (event) => {
        const res = await axios.get(`http://127.0.0.1:8000/api/books/${id}`)
            .then((ketqua) => {
                setBookInfo(ketqua.data);
                if (ketqua.data[0].book_cover_photo) {
                    setUrl(`http://127.0.0.1:8000/resources/assets/bookcover/` + ketqua.data[0].book_cover_photo + `.jpg`)
                }
            })
            .catch((err) => {
                alert(err);
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
                    return x = (x.id === product.id ? { ...product, qty: (x.qty + number)>8?8:(x.qty + number), url: url } : x);
                }))
        } else {
            console.log('item mới');
            setCartItems([...cartItems, { ...product, qty: number, url: url }]);
        }
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
                        <div className="read-review" style={{position:'relative'}}>
                            <ReviewView id={id}/>
                        </div>
                    </div>
                    <div className="col-sm-4">
                        <div className="write-review">
                            <ReviewForm />
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}