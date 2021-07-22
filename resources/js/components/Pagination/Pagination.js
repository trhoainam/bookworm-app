import React from 'react';

export default function Pagination(props) {
    const paginationRender=(otherData)=>{
        let res=[];
        let current_page=otherData.current_page;
        otherData.links.map((item,index)=>{
            let label=item.label;
            let page=label;
            if(item.label.search('Previous')!=-1){
                label=label.slice(8);
                page=current_page -1;
            }else if(item.label.search('Next')!=-1){
                label=label.slice(0,4);
                page=current_page +1;
            }
            page=parseInt(page);
            if(item.url===null&&!item.active){
                res.push(<li key={index} className="page-item disabled">
                <a className="page-link" style={{ cursor: "pointer" }} onClick={() => { props.onChangePage(page) }} >{label}</a>
            </li>)
            }else if(item.url!==null&&!item.active){
                res.push(<li key={index} className="page-item ">
                <a className="page-link" style={{ cursor: "pointer" }} onClick={() => { props.onChangePage(page) }} >{label}</a>
            </li>)
            }else if(item.url!==null&&item.active){
                res.push(<li key={index} className="page-item active">
                <a className="page-link" style={{ cursor: "pointer" }} onClick={() => { props.onChangePage(page) }}>{label}<span className="sr-only">(current)</span></a>
            </li>)
            }
        });
        return res;
    }
    return (
        <>
            <div className="pagination-div">
                <nav aria-label="...">
                    <ul className="pagination">
                        {props.otherData.links?paginationRender(props.otherData):'không'}
                    </ul>
                </nav>
            </div>
        </>
    )
}
