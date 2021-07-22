import React from 'react';
import { useState, useEffect } from 'react';

export default function ProductTotal(props) {
    const [count,setCount]=useState(1);
    
    const onPlus = () =>{
        if(count<8)
        setCount(count+1);
    }
    const onMinus =() =>{
        if(count >1){
            setCount(count-1);
        }
    }
    const handleChange=(e)=> {
        setCount(e.target.value);
    }
    return (
        <>
            <div className="product-total">
                <div className="product-total-header">
                    <b>{props.bookInfo? '$'+props.bookInfo[0].final_price : ''}</b>
                </div>
                <div className="product-total-content" style={{textAlign: 'center', paddingTop: '20%'}}>
                    Quantity
                    <div className="input-group number-spinner" style={{width: '80%', margin: 'auto'}}>
                        <span className="input-group-btn">
                            <button className="btn btn-default" onClick={()=>onMinus()}>-</button>
                        </span>
                        <input type="text" className="form-control text-center" value={count} 
                        onChange={handleChange}/>
                        <span className="input-group-btn">
                            <button className="btn btn-default" onClick={()=>onPlus()}>+</button>
                        </span>
                    </div>
                    <button type="button" className="btn btn-secondary" 
                    style={{marginTop: '40px', width: '80%'}}
                    onClick={()=>{
                        props.onAdd(props.bookInfo[0],count);
                    }}>Add To Cart
                    </button>
                </div>
            </div>
        </>
    );
}