import React from 'react';

export default function CartDetailHeader() {
    return (
        <>
            <div className="row cart-detail-header">
                <div className="col-sm-3">
                    <b>Product</b>
                </div>
                <div className="col-sm-3">
                </div>
                <div className="col-sm-2">
                    <b>Price</b>
                </div>
                <div className="col-sm-2">
                    <b>Quantity</b>
                </div>
                <div className="col-sm-2">
                    <b>Total</b>
                </div>
            </div>
        </>
    )
}
