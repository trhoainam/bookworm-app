import React from 'react';
import Filter from './../components/Filter/Filter';
import ListProduct from './../components/ListProduct/ListProduct';
import Pagination from './../components/Pagination/Pagination';
import Sort from './../components/Sort/Sort';
import { useState, useEffect } from 'react';

export default function Shop() {
    const [otherData, setOtherData] = useState([]);
    const [books, setBooks] = useState([]);
    const [categories, setCategories] = useState([]);
    const [authors, setAuthors] = useState([]);
    const [filter, setFilter] = useState({ filterBy: "categories.id", filterValue: 2, filterName: '' });
    const [sort, setSort] = useState("sale");
    const [per, setPer] = useState(20);
    const [page, setPage] = useState(1);


    const fetchData = async (event) => {
        const params = {
            params: {
                per: per,
                page: page,
                sort: sort,
                filter_by: filter.filterBy,
                filter_value: filter.filterValue
            }
        }
        const res = await axios.get("http://127.0.0.1:8000/api/filter", params)
            .then((ketqua) => {
                setBooks(ketqua.data.data);
                setOtherData(ketqua.data);
            })
            .catch((err) => {
                alert(err);
            });
    }
    useEffect(() => {
        fetchData();
    }, [filter, sort, per, page])
    useEffect(() => {
        categories ?
            (categories[0] ?
                setFilter({ filterBy: "categories.id", filterValue: 2, filterName: categories[0].category_name })
                : '')
            : '';
    }, [categories])
    const getCategory = async (event) => {
        const res = await axios.get("http://127.0.0.1:8000/api/categories")
            .then((ketqua) => {
                setCategories(ketqua.data)
            })
            .catch((err) => {
                alert(err);
            });
    }
    const getAuthor = async (event) => {
        const res = await axios.get("http://127.0.0.1:8000/api/authors")
            .then((ketqua) => {
                setAuthors(ketqua.data)
            })
            .catch((err) => {
                alert(err);
            });
    }
    const onChangeFilter = (type, id, name) => {
        setFilter({ filterBy: type, filterValue: id, filterName: name })
    }
    const onChangePerPage = (per) => {
        setPer(per);
    }
    const onChangePage = (page) => {
        setPage(page);
    }
    const onChangeSort = (type) => {
        setSort(type);
    }
    useEffect(() => {
        fetchData();
        getCategory();
        getAuthor();
    }, [])
    return (
        <>
            <div>
                <div className="shop-header mt-4" style={{ display: 'flex', marginBottom: '30px' }}>
                    <b className="h4">Books</b>
                    (Filtered By {filter.filterBy[0].toUpperCase() + filter.filterBy.slice(1, filter.filterBy.length - 3)} #
                    {filter.filterName?filter.filterName[0].toUpperCase()+filter.filterName.slice(1):''}) </div>
                <div className="shop-content">
                    <div className="row">
                        <div className="col-sm-2 filter">
                            <Filter categories={categories} authors={authors} onChangeFilter={onChangeFilter} />
                        </div>
                        <div className="col-sm-10 books">
                            <Sort onChangePerPage={onChangePerPage} onChangeSort={onChangeSort} otherData={otherData} />
                            <ListProduct books={books} />
                            <Pagination otherData={otherData} onChangePage={onChangePage} />
                        </div>
                    </div>
                </div>
            </div>
        </>
    )

}
