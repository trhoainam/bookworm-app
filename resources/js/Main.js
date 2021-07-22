import "../css/style.css";
import React from 'react';
import ReactDOM from 'react-dom';
import { useState, useEffect } from 'react';
import Footer from './components/Common/Footer';
import Nav from './components/Common/Nav';
import Home from './pages/Home';
import Product from './pages/Product';
import About from "./pages/About";
import Error from "./pages/Error";
import Cart from "./pages/Cart";
import Shop from "./pages/Shop";
import {
    BrowserRouter as Router,
    Routes,
    Route,
} from "react-router-dom";

function Main() {
    const [cartItems, setCartItems] = useState([]);
    useEffect(() => {
        const cart = localStorage.getItem('cartItems') ? JSON.parse(localStorage.getItem('cartItems')) : [];
        setCartItems(cart);
    }, []);
    const handleCartChange = (cartItems) => {
        setCartItems(cartItems);
    }
    return (
        <>
            <Router>
                <Nav cartItems={cartItems} />
                <Routes >
                    <Route exact path='/' element={<Home />} />
                    <Route path='/about' >
                        <About />
                    </Route>
                    <Route path='/shop' >
                        <Shop />
                    </Route>
                    <Route path='/cart' >
                        <Cart cartItems={cartItems} onCartChange={handleCartChange}/>
                    </Route>
                    <Route path="/product/:id" children={<Product onCartChange={handleCartChange} />} />
                    <Route path="*" element={<Error />} />
                </Routes>
                <Footer />
            </Router>
        </>
    );
}

export default Main;

if (document.getElementById('app')) {
    ReactDOM.render(<Main />, document.getElementById('app'));
}
