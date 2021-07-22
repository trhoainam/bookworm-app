import React, { Component } from 'react';
import BookUI from '../Common/BookUI';

export default class Carousel extends Component {
    state = {
        books: this.props.books
    }
    getOnSaleListRender() {
        let res = [];
        let step = 0;
        let rows = this.props.books.length / 4;
        let du = this.props.books.length % 4;
        if (du > 0) {
            rows++;
        }
        rows=Math.floor(rows);
        let i=0;
        for (i = 0; i < rows; i++) {
            let active_class = i == 0 ? 'active' : '';
            let subRes = [];
                    {this.props.books.map((item, index) => {
                        if (index >= step && index < step + 4)
                            subRes.push(<BookUI key={index} book={item}  />);
                    })}
            res.push(<div key={i} className={`carousel-item ${active_class}`}>
                <div className="row">
                    {subRes}
                </div>
            </div>)
            step += 4;
        }
        return res;
    }
    render() {
        return (
            <div id="carouselExampleControls" className="carousel slide" data-ride="carousel" data-pause="hover">
                <div className="carousel-inner">
                    {this.getOnSaleListRender()}
                </div>
                <a className="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span className="sr-only">Previous</span>
                </a>
                <a className="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span className="carousel-control-next-icon" aria-hidden="true"></span>
                    <span className="sr-only">Next</span>
                </a>
            </div>
        )
    }
}

