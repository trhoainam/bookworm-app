import React, { Component } from 'react';

export default class About extends Component {
    render() {
        return (
            <>
                <div>
                    <div className="about-header mt-4"><h4 className="title">About Us</h4> </div>
                    <div className="about-content">
                        <div className="content">
                            <div className="main-content">
                                <h1 className="welcome">Welcome to Bookworm</h1>
                                <p className="text">"Bookworm is an independent New York bookstore and language school with locations in
                                    Manhattan and Brooklyn. We specialize in travel books and language classes.
                                    "</p>
                            </div>
                            <div className="sub-content row">
                                <div className="col-sm-6">
                                    <h2>Our Story</h2>
                                    <p>The name Bookworm was taken from the original name for New York International Airport,
                                        which was renamed JFK in December 1963.</p>
                                    <p>Our Manhattan store has just moved to the West Village. Our new location is 170 7th Avenue
                                        South, at the corner of Perry Street.</p>
                                    <p>From March 2008 through May 2016, the store was located in the Flatiron Distric.</p>
                                </div>
                                <div className="col-sm-6">
                                    <h2>Our Vision</h2>
                                    <p>One of the last travel bookstores in the country, our Manhattan store carries a range of
                                        guidebooks (all 10% off) to suit the needs and tastes of every traveller and budget.
                                    </p>
                                    <p>We believe that a novel or travelogue can be just as valuable a key to a place as any guidebook,
                                        and our well-read, well-travelled staff is happy to make reading recommendations for any
                                        traveller, book lover, or gift giver.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>
        )
    }
}
