import React from 'react'

export default function ReviewView() {
    return (
        <>
            <div>
                <h4>Customer Reviews</h4> (Filtered by ...)
                <h2>x.y Star</h2>
                <p>(total)  5 star (a) | 4 star (b) | 3 star (c) | 2 star (d) | 1 star (e)</p>
                <div className="row">
                    <div className="col-sm-6">
                        Showing  reviews
                    </div>
                    <div className="col-sm-6">
                        <div className="dropdown d-inline-block">
                            <button className="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort By Date
                            </button>
                            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a className="dropdown-item" href="#">Sort By Date: newest to oldest</a>
                                <a className="dropdown-item" href="#">Sort By Date: oldest to newest </a>
                            </div>
                        </div>
                        <div className="dropdown d-inline-block">
                            <button className="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Showing :
                            </button>
                            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a className="dropdown-item" href="#">5</a>
                                <a className="dropdown-item" href="#">10 </a>
                                <a className="dropdown-item" href="#">20 </a>
                                <a className="dropdown-item" href="#">25 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}
