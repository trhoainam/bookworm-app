import React from 'react'

export default function ReviewForm() {
    return (
        <>
            <div className="write-review-header">
                <h4>Write a Review</h4>
            </div>
            <div className="write-review-content" >
                <div className="stars">
                    <form action="">
                        <p>Add a title</p>
                        <input type="text" name="review-title" id="review-title" />
                        <p>Details please! Your review helps other shoppers.</p>
                        <textarea rows="4"></textarea>
                        <p>Select a rating star</p>

                        <input className="star star-5" id="star-5" type="radio" name="star" value="5" />
                        <label className="star star-5" htmlFor="star-5"></label>
                        <input className="star star-4" id="star-4" type="radio" name="star" value="4" />
                        <label className="star star-4" htmlFor="star-4"></label>
                        <input className="star star-3" id="star-3" type="radio" name="star" value="3" />
                        <label className="star star-3" htmlFor="star-3"></label>
                        <input className="star star-2" id="star-2" type="radio" name="star" value="2" />
                        <label className="star star-2" htmlFor="star-2"></label>
                        <input className="star star-1" id="star-1" type="radio" name="star" value="1" />
                        <label className="star star-1" htmlFor="star-1"></label>
                    </form>
                </div>
            </div>
            <div className="write-review-footer">
                <button type="button" className="btn btn-secondary" style={{ width: "80%" }}>Submit Review</button>
            </div>
        </>
    )
}
