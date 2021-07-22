import React from 'react';

export default function ProductDetail(props) {
    const showInfo = () => {
        let price = props.bookInfo[0].book_price;
        if (props.bookInfo[0].book_price != props.bookInfo[0].final_price) {
            price = props.bookInfo[0].final_price;
        }
        return (
            <>
                <div className="product-detail">
                    <div className="row product-detail-content">
                        <div className="col-sm-4">
                            <img className="product-book-img" src={props.url} alt="book_img" />
                            <p style={{ float: 'right' }}> By (author) <b>{props.bookInfo[0].author.author_name}</b></p>
                        </div>
                        <div className="col-sm-8">
                            <h1>{props.bookInfo[0].book_title}</h1>
                            {props.bookInfo[0].book_summary}
                        </div>
                    </div>
                </div>
            </>
        );
    }

    return (
        <>
            {props.bookInfo ? showInfo() : ''}
        </>
    );
}
