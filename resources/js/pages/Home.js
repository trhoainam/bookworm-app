import React, { Component } from 'react'
import TabHeader from "./../components/Tab/TabHeader";
import TabPane from "./../components/Tab/TabPane";
import Carousel from './../components/Carousel/Carousel';
import {
    Link
} from "react-router-dom";
import axios from 'axios';

export default class Home extends Component {
    state = {
        books: [],
        books1: [],
        books2: [],
    }
    getBook = async (event) => {
        const res = await axios.get("http://127.0.0.1:8000/api/on-sale-books")
            .then((ketqua) => {
                this.setState({ books: ketqua.data });
            })
            .catch((err) => {
                alert(err);
            });
    }
    getBook1 = async (event) => {
        const res = await axios.get("http://127.0.0.1:8000/api/recommend-books")
            .then((ketqua) => {
                this.setState({ books1: ketqua.data });
            })
            .catch((err) => {
                alert(err);
            });
    }
    getBook2 = async (event) => {
        const res = await axios.get("http://127.0.0.1:8000/api/popular-books")
            .then((ketqua) => {
                this.setState({ books2: ketqua.data });
            })
            .catch((err) => {
                alert(err);
            });
    }
    componentDidMount = () => {
        this.getBook();
        this.getBook1();
        this.getBook2();
    }

    render() {
        return (
            <>
                <div className="on-sale mt-5">
                    <div className="on-sale-topbar">
                        <h2>On Sale</h2>
                        <Link to="/shop">
                            <button type="button" className="btn btn-secondary">View All {">"}</button>
                        </Link>
                    </div>
                </div>
                <Carousel books={this.state.books} ref="carousel" />
                <h2 className="featured">Featured Books</h2>
                <TabHeader />
                <TabPane books1={this.state.books1} books2={this.state.books2} />
            </>
        )
    }
}
