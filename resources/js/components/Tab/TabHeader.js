import React, { Component } from 'react'

export default class TabHeader extends Component {
    render() {
        return (
            <ul className="nav nav-tabs" >
                <li className="nav-item">
                    <a className="nav-link active" data-toggle="tab" href="#recommended">Recommended</a>
                </li>
                <li className="nav-item">
                    <a className="nav-link" data-toggle="tab" href="#popular">Popular</a>
                </li>
            </ul>
        )
    }
}
