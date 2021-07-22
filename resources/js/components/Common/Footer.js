import React, { Component } from 'react';
import FooterIcon from '../../../assets/bookworm_icon.svg';
import { Link } from 'react-router-dom';


export default class Footer extends Component {
    render() {
        return (
            <div className="mt-5 bg-light">
                <section style={{display: "flex"}}>
                    <div className="mx-3 mt-3">
                        <Link className="navbar-brand" to="/">
                            <img src={FooterIcon}/>
                        </Link>
                    </div>
                    <div className="ml-3">
                        <h5>BOOKWORM</h5>
                        <span>ADDRESS</span>
                        <br/>
                        <span>PHONE</span>
                    </div>
                </section>
            </div> 
        )
    }
}
