import React from 'react';
import { useState, useEffect } from 'react';
import {
  Link
} from "react-router-dom";

export default function CartDetailContent(props) {
  const [count, setCount] = useState(props.cartItem.qty);
  useEffect(() => {
    props.handleChange(props.cartItem, count);
  }, [count])
  useEffect(() => {
    setCount(props.cartItem.qty)
  }, [props])
  const onPlus = () => {
    if (count < 8)
      setCount(count + 1);
  }
  const onMinus = () => {
    if (count > 0) {
      setCount(count - 1);
    }
  }
  const handleInputChange = (e) => {
    setCount(e.target.value);
  }
  return (
    <>
      <div className="col-sm-3">
        <Link to={`/product/${props.cartItem.id}`} target="_blank"><img className="cart-book-img" src={props.cartItem.url} alt="book_img" /></Link>
      </div>
      <div className="col-sm-3" style={{ margin: 'auto' }}>
        <Link to={`/product/${props.cartItem.id}`} target="_blank"><b>{props.cartItem.book_title}</b></Link>
        <p>{props.cartItem.author.author_name}</p>
      </div>
      <div className="col-sm-2" style={{ margin: 'auto' }}>
        <b>${props.cartItem.final_price}</b>
      </div>
      <div className="col-sm-2" style={{ margin: 'auto' }}>
        <div className="input-group number-spinner">
          <span className="input-group-btn">
            <button className="btn btn-default" onClick={() => onMinus()}>-</button>
          </span>
          <input type="text" className="form-control text-center" value={count} onChange={() => handleInputChange} />
          <span className="input-group-btn">
            <button className="btn btn-default" onClick={() => onPlus()}>+</button>
          </span>
        </div>
      </div>
      <div className="col-sm-2" style={{ margin: 'auto' }}>
        <b>${(props.cartItem.final_price * count).toFixed(2)} </b>
      </div>

    </>
  )
}
