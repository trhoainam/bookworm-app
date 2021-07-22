import React from 'react';
import { useState } from 'react';

export default function Sort(props) {
    const [per, setPer] = useState(20);
    const [sort, setSort] = useState("Sale");
    return (
        <>
            <div className="list-header">
                <b>Showing {props.otherData.from}-{props.otherData.to} of {props.otherData.total} books</b>
                <div className="dropdown">
                    <button className="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Show {per}
                    </button>
                    <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(5); props.onChangePerPage(5) }}>5</div>
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(15); props.onChangePerPage(15) }}>15 </div>
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(20); props.onChangePerPage(20) }}>20</div>
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(25); props.onChangePerPage(25) }}>25</div>
                    </div>
                </div>
                <div className="dropdown">
                    <button className="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort By {sort}
                    </button>
                    <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setSort('Sale'); props.onChangeSort('sale') }}>Sort By Sale</div>
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setSort('Popularity'); props.onChangeSort('popularity') }}>Sort By Popularity </div>
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setSort('Price Low To High'); props.onChangeSort('price_asc') }}>Sort By Price Low To High</div>
                        <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setSort('Price High To Low'); props.onChangeSort('price_desc') }}>Sort By Price High To Low</div>
                    </div>
                </div>
            </div>
        </>
    )
}
