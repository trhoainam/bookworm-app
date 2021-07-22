import React, { Component } from 'react';
import BookUI from '../Common/BookUI';

export default class ListProduct extends Component {
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
            <>
                {this.getListRender(this.props.books)}
            </>
        )
    }
}
