import React, { Component } from 'react';
import BookUI from './../Common/BookUI';


export default class TabPane extends Component {
    state = {
        books1: this.props.books1,
        books2: this.props.books2,
    }
    getListRender(books) {
        let res = [];
        let step = 0;
        let rows = books.length / 4;
        let du = books.length % 4;
        if (du > 0) {
            rows++;
        }
        rows = Math.floor(rows);
        let i = 0;
        for (i = 0; i < rows; i++) {
            let subRes = [];
            {
                books.map((item, index) => {
                    if (index >= step && index < step + 4)
                        subRes.push(<BookUI key={index} book={item} />);
                })
            }
            res.push(
                <div key={i} className="row">
                    {subRes}
                </div>
            )
            step += 4;
        }
        return res;
    }
    render() {
        return (
            <div className="tab-content">
                <div id="recommended" className="container tab-pane active">
                    {this.getListRender(this.props.books1)}
                </div>
                <div id="popular" className="container tab-pane fade"><br />
                    {this.getListRender(this.props.books2)}
                </div>
            </div>
        )
    }
}
