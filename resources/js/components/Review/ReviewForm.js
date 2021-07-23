import React from 'react';
import { useState, useEffect } from 'react';

export default function ReviewForm(props) {
    const [reviewTitle, setReviewTitle] = useState("");
    const [reviewContent, setReviewContent] = useState("");
    const [reviewRating, setReviewRating] = useState('1');

    function onReviewTitleChange(event) {
        setReviewTitle(event.target.value);
    }
    function onReviewContentChange(event) {
        setReviewContent(event.target.value);
    }
    function onReviewRatingChange(event) {
        setReviewRating(event.target.value);
    }
    function onSubmit(event) {
        event.preventDefault();
        console.log(reviewContent,reviewTitle,reviewRating);
        const params = {
            "review_title": reviewTitle,
            "review_details": reviewContent,
            "rating_start": reviewRating
        }
        axios.post(`http://127.0.0.1:8000/api/reviews/${props.id}`, params)
            .then((ketqua) => {
                props.handleSubmit();
                setReviewTitle("");
                setReviewContent("");
                setReviewRating('1')
            })
            .catch((error) => {
            })
    }
    return (
        <>
            <div className="write-review-header">
                <h4>Write a Review</h4>
            </div>
            <form onSubmit={onSubmit}>
                <div className="write-review-content" >
                    <div className="stars">

                        <p>Add a title</p>
                        <input type="text" name="review-title" id="review-title" value={reviewTitle} 
                        onChange={onReviewTitleChange} maxLength="120" />
                        <p>Details please! Your review helps other shoppers.</p>
                        <textarea rows="4" value={reviewContent}
                        onChange={onReviewContentChange}/>
                        <p>Select a rating star</p>

                        <input className="star star-5" id="star-5" type="radio" name="star" value="5" 
                        onChange={onReviewRatingChange} />
                        <label className="star star-5" htmlFor="star-5"></label>
                        <input className="star star-4" id="star-4" type="radio" name="star" value="4" 
                        onChange={onReviewRatingChange} />
                        <label className="star star-4" htmlFor="star-4"></label>
                        <input className="star star-3" id="star-3" type="radio" name="star" value="3" 
                        onChange={onReviewRatingChange} />
                        <label className="star star-3" htmlFor="star-3"></label>
                        <input className="star star-2" id="star-2" type="radio" name="star" value="2" 
                        onChange={onReviewRatingChange} />
                        <label className="star star-2" htmlFor="star-2"></label>
                        <input className="star star-1" id="star-1" type="radio" name="star" value="1" 
                        onChange={onReviewRatingChange} />
                        <label className="star star-1" htmlFor="star-1"></label>

                    </div>
                </div>
                <div className="write-review-footer">
                    <button type="submit" className="btn btn-secondary" style={{ width: "80%" }}>Submit Review</button>
                </div>
            </form>
        </>
    )
}
