import React from 'react';

export default function CartTotal(props) {
    const calc = (cartItems) => {
        let total = 0;
        cartItems.map((item) => {
            let finalPrice = parseFloat(item.final_price) * item.qty;
            total += finalPrice;
        })
        return total.toFixed(2);
    }
    return (
        <>
            <div className="cart-total">
                <div className="cart-total-header">
                    <b>Cart Total</b>
                </div>
                <div className="cart-total-content" style={{ textAlign: 'center', paddingTop: '20%' }}>
                    <h1>{props.cartItems ? calc(props.cartItems) : 0} $</h1>
                    <button type="button" className="btn btn-secondary"
                        style={{ marginTop: '40px', width: '80%' }}
                        onClick={() => { props.onPlaceOrder() }}>Place Order</button>
                </div>
            </div>
        </>
    )
}
