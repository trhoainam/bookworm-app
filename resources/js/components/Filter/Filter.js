import React, { Component } from 'react';

export default class Filter extends Component {
    categoriesRender(categories) {
        let res = [];

        categories.map((item, index) => {
            res.push(<div 
                style={{cursor:"pointer"}} 
                key={index} 
                onClick={() =>{
                    let name=item.category_name;
                    let finalName=name[0].toUpperCase()+name.slice(1);
                    this.props.onChangeFilter("categories.id", item.id,finalName)
                }
                }>
                    <p>{item.category_name[0].toUpperCase()+item.category_name.slice(1)}</p></div>);
        })

        return res;
    }
    authorsRender(authors) {
        let res = [];

        authors.map((item, index) => {
            res.push(<div style={{cursor:"pointer"}} key={index} onClick={() => {this.props.onChangeFilter("authors.id", item.id,item.author_name)}}><p>{item.author_name}</p></div>);
        })

        return res;
    }
    render() {
        return (
            <>
                <b>Filter By</b>
                <div className="accordion" id="accordionExample">
                    <div className="card">
                        <div className="card-header" id="headingOne">
                            <h2 className="mb-0">
                                <button className="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Category
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" className="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div className="card-body">
                                {this.categoriesRender(this.props.categories)}
                            </div>
                        </div>
                    </div>
                    <div className="card">
                        <div className="card-header" id="headingTwo">
                            <h2 className="mb-0">
                                <button className="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Author
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" className="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div className="card-body">
                                {this.authorsRender(this.props.authors)}
                            </div>
                        </div>
                    </div>
                    <div className="card">
                        <div className="card-header" id="headingThree">
                            <h2 className="mb-0">
                                <button className="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Rating Review
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" className="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div className="card-body">
                                <div style={{cursor:"pointer"}} onClick={() => {this.props.onChangeFilter("staravg", 1,"1 Star")}}><p>1 Star</p></div>
                                <div style={{cursor:"pointer"}} onClick={() => {this.props.onChangeFilter("staravg", 2,"2 Star")}}><p>2 Star</p></div>
                                <div style={{cursor:"pointer"}} onClick={() => {this.props.onChangeFilter("staravg", 3,"3 Star")}}><p>3 Star</p></div>
                                <div style={{cursor:"pointer"}} onClick={() => {this.props.onChangeFilter("staravg", 4,"4 Star")}}><p>4 Star</p></div>
                                <div style={{cursor:"pointer"}} onClick={() => {this.props.onChangeFilter("staravg", 5,"5 Star")}}><p>5 Star</p></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </>
        )
    }
}
