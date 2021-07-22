import React, { Component } from 'react';
import {
  Link
} from "react-router-dom";


export default class BookUI extends Component {
  state = {
    book: this.props.book,
    url: 'http://127.0.0.1:8000/resources/assets/bookcover/book1.jpg'
  }
  componentDidMount() {
    this.changeURL();
  }
  componentDidUpdate(prevProps) {
    if (prevProps !== this.props) {
      this.changeURL();
    }
  }
  changeURL() {
    this.setState({ book: this.props.book });
    if (typeof (this.props.book) !== "undefined")
      if (typeof (this.props.book.book_cover_photo) !== "undefined" && this.props.book.book_cover_photo !== null) {
        if (this.props.book.book_cover_photo != null) {
          this.setState({ url: `http://127.0.0.1:8000/resources/assets/bookcover/` + this.props.book.book_cover_photo + `.jpg` })
        }
      }
  }
  renderPrice() {
    let book = this.props.book;
    let res = [];
    if (book.book_price != book.final_price) {
      res.push(<>{book.book_price} $ {book.final_price} $ </>)
    } else {
      res.push(<>{book.book_price} $</>)
    }
    return res;
  }
  render() {
    let price;
    if (this.props.book) {
      if (this.props.book.final_price != this.props.book.book_price) {
        price = <>
          <span>${this.props.book.final_price}</span>
          <del style={{ marginLeft: "5%", color: "gray" }}>${this.props.book.book_price}</del>
        </>;
      } else {
        price = <span>${this.props.book.book_price}</span>
      }
    }
    return (
      <div className="col-sm-3">
        <div className="card" style={{ width: "100%" }}>
          <Link to={`/product/${this.props && this.props.book && this.props.book.id}`}>
            <div className="card-img-top">
              <img src={this.props && this.props.book && this.state.url} alt="Card image cap" />
            </div>
            <div className="card-body">
              <h5 className="card-title">{this.props && this.props.book && this.props.book.book_title}</h5>
              <p className="card-text">
                {this.props && this.props.book && this.props.book.author.author_name}
              </p>
            </div>
            <div className="card-header">
              {price}
            </div>
          </Link>
        </div>
      </div>
    )
  }
}
