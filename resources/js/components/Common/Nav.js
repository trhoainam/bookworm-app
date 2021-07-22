import React from 'react';
import Icon from '../../../assets/bookworm_icon.svg';
import {
  Link
} from "react-router-dom";
import { useState, useEffect } from 'react';

export default function Nav(props) {
  const [cartItems, setCartItems] = useState(props.cartItems);
  useEffect(() => {
    const cart = localStorage.getItem('cartItems') ? JSON.parse(localStorage.getItem('cartItems')) : [];
    setCartItems(cart);
  }, []);
  useEffect(() => {
    const cart = localStorage.getItem('cartItems') ? JSON.parse(localStorage.getItem('cartItems')) : [];
    setCartItems(cart);
  }, [props]);
  return (
    <nav className="navbar navbar-light bg-light">
      <Link className="navbar-brand" to="/">
        <img src={Icon} alt="back" />
      </Link>
      <ul className="navbar-nav flex-row ml-md-auto d-md-flex">
        <li className="nav-item">
          <Link to="/" className="nav-link">Home</Link>
        </li>
        <li className="nav-item ml-3">
          <Link to="/shop" className="nav-link">Shop</Link>
        </li>
        <li className="nav-item ml-3">
          <Link to="/about" className="nav-link">About</Link>
        </li>
        <li className="nav-item ml-3">
          <Link to="/cart" className="nav-link">Cart({cartItems ? cartItems.length : 0})</Link>
        </li>
      </ul>
    </nav>
  )
}
