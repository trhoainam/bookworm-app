import React from 'react';
import { useState, useEffect } from 'react';
import Pagination from '../Pagination/Pagination';

export default function ReviewView(props) {
    const [filter, setFilter] = useState({ filterBy: "total", filterValue: '1', filterName: 'Total' });
    const [sort, setSort] = useState({ sortBy: "new", sortName: "newest to oldest" });
    const [per, setPer] = useState(20);
    const [page, setPage] = useState(1);
    const [header, setHeader] = useState([]);
    const [reviews, setReviews] = useState([]);
    const [otherData, setOtherData] = useState([]);

    const fetchData = async (event) => {
        const params = {
            params: {
                per: per,
                page: page,
                sort: sort.sortBy,
                filter_by: filter.filterBy,
                filter_value: filter.filterValue
            }
        }
        const res = await axios.get(`http://127.0.0.1:8000/api/reviews/${props.id}`, params)
            .then((ketqua) => {
                setReviews(ketqua.data.reviews.data);
                setHeader(ketqua.data.header);
                setOtherData(ketqua.data.reviews);
            })
            .catch((err) => {
                alert(err);
            });
    }
    const onChangePage = (page) => {
        setPage(page);
    }
    useEffect(()=>{
        fetchData();
    },[props.reRender])
    useEffect(() => {
        fetchData();
    }, [filter, sort, per, page])
    useEffect(() => {
        fetchData();
    }, [])
    const localeDateString=(date)=>{
        let d= new Date(date);
        return d.toLocaleDateString(undefined, {
            month: 'short',
            day: 'numeric',
            year: 'numeric',
          });
    }
    const reviewsRender=()=>{
        let res=[];
        reviews[0]?reviews[0].review_title?
        reviews.map((item,index)=>{
            res.push(<div key={index}>
                <hr />
                <h2 style={{display: 'inline-block',overflowWrap:'anywhere'}}>{item.review_title}</h2><span>|{item.rating_start} Star</span>
                <p>{item.review_details}</p>
                <p>{localeDateString(item.review_date)}</p>
              </div>)
        }):[]:[];
        return res;
    }
    return (
        <>
            <div >
                <h4>Customer Reviews</h4> (Filtered by {filter.filterName})
                <h2>{header[0]?parseFloat(header[0].avg_star).toFixed(2):0} Star</h2>
                <div style={{display:"inline",overflowWrap:"anywhere"}}>
                    
                    <div className="dropdown-item" style={{ cursor: "pointer",display: "inline" }} 
                    
                    onClick={(e) => { setFilter({ filterBy: "total", filterValue: '1', filterName: 'Total' }) }}>
                    Total ({header[0]?header[0].total:0})</div>
                    <div className="dropdown-item" style={{ cursor: "pointer",display: "inline" }} 
                    
                    onClick={(e) => { setFilter({ filterBy: "reviews.rating_start", filterValue: '5', filterName: '5 Star' }) }}>
                    5 star ({header[0]?header[0].star5:0})</div>
                    |
                    <div className="dropdown-item" style={{ cursor: "pointer",display: "inline" }} 
                    
                    onClick={(e) => { setFilter({ filterBy: "reviews.rating_start", filterValue: '4', filterName: '4 Star' }) }}>
                    4 star ({header[0]?header[0].star4:0})</div>
                    |
                    <div className="dropdown-item" style={{ cursor: "pointer",display: "inline" }} 
                    
                    onClick={(e) => { setFilter({ filterBy: "reviews.rating_start", filterValue: '3', filterName: '3 Star' }) }}>
                    3 star ({header[0]?header[0].star3:0})</div>
                    |
                    <div className="dropdown-item" style={{ cursor: "pointer",display: "inline" }} 
                    
                    onClick={(e) => { setFilter({ filterBy: "reviews.rating_start", filterValue: '2', filterName: '2 Star' }) }}>
                    2 star ({header[0]?header[0].star2:0})</div>
                    |
                    <div className="dropdown-item" style={{ cursor: "pointer",display: "inline" }} 
                    
                    onClick={(e) => { setFilter({ filterBy: "reviews.rating_start", filterValue: '1', filterName: '1 Star' }) }}>
                    1 star ({header[0]?header[0].star1:0})</div>
                    </div>
                <div className="row">
                    <div className="col-sm-6">
                        Showing {otherData.from}-{otherData.to} of {otherData.total} reviews
                    </div>
                    <div className="col-sm-6">
                        <div className="dropdown d-inline-block">
                            <button className="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort By Date: {sort.sortName}
                            </button>
                            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setSort({ sortBy: "new", sortName: "newest to oldest" }) }}>Sort By Date: newest to oldest</div>
                                <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setSort({ sortBy: "old", sortName: "oldest to newest" }) }}>Sort By Date: oldest to newest</div>
                            </div>
                        </div>
                        <div className="dropdown d-inline-block">
                            <button className="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Showing: {per}
                            </button>
                            <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(5) }}>5</div>
                                <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(10) }}>10</div>
                                <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(20) }}>20</div>
                                <div className="dropdown-item" style={{ cursor: "pointer" }} onClick={() => { setPer(25) }}>25</div>
                            </div>
                        </div>
                    </div>
                </div>
                {reviewsRender()}
                <div style={{marginTop:"10px"}}/>
                <Pagination otherData={otherData} onChangePage={onChangePage} style={{ margin:"50px",bottom:"0"}} />
            </div>
        </>
    )
}
