<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Discount;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function top10Discounts(){
        $books=Book::selectSubPrice()
        ->orderByDesc('sub_price')
        ->limit(10)
        ->with('author')
        ->get();
        return response()->json($books);
    }
    function top8Recommends(){
        $books=Book::select('books.id','authors.author_name')
        ->join('reviews', 'books.id','=','reviews.book_id')
        ->join('authors', 'books.author_id','=','authors.id')
        ->selectAverageStar()
        ->orderByDesc('star')
        ->selectFinalPrice()
        ->orderBy('final_price')
        ->groupBy('final_price')
        ->groupBy('books.id')
        ->groupBy('authors.author_name')
        ->limit(8)
        ->get();
        return response()->json($books);
    }
    function top8Populars(){
        $books=Book::select('books.id','authors.author_name')
        ->join('reviews', 'books.id','=','reviews.book_id')
        ->join('authors', 'books.author_id','=','authors.id')
        ->selectCountComment()
        ->orderByDesc('comment')
        ->selectFinalPrice()
        ->orderBy('final_price')
        ->groupBy('final_price')
        ->groupBy('books.id')
        ->groupBy('authors.author_name')
        ->limit(8)
        ->get();
        return response()->json($books);
    }
    function getBookById($id){
        $book=Book::where('books.id',$id)
        ->select('books.*')
        ->with('author')
        ->with('category')
        ->with('reviews')
        ->selectFinalPrice()
        ->get();
        return response()->json($book);
    }
    function filterByCategory($category,$sort,$per,$page,$isAsc){
        if($sort==="sale"){
            $books=Book::selectSubPrice()
            ->orderByDesc('sub_price')
            ->limit($per)
            ->offset(($page-1)*$per)
            ->join('categories','books.category_id','=','categories.id')
            ->where('category_id',$category)
            ->with('author')
            ->get();
            return response()->json($books);
        }
        else if($sort==="popular"){
            $books=Book::select('books.id','authors.author_name')
            ->join('reviews', 'books.id','=','reviews.book_id')
            ->join('authors', 'books.author_id','=','authors.id')
            ->selectCountComment()
            ->orderByDesc('comment')
            ->selectFinalPrice()
            ->orderBy('final_price')
            ->groupBy('final_price')
            ->groupBy('books.id')
            ->groupBy('authors.author_name')
            ->join('categories','books.category_id','=','categories.id')
            ->where('category_id',$category)
            ->limit($per)
            ->offset(($page-1)*$per)
            ->get();
            return response()->json($books);
        }
        else if($sort==="price"){
            $books=Book::select('books.id','authors.author_name','books.author_id')
            ->selectFinalPrice()
            ->join('authors', 'books.author_id','=','authors.id')
            ->groupBy('final_price')
            ->groupBy('books.id')
            ->groupBy('authors.author_name')
            ->groupBy('authors.id')
            ->join('categories','books.category_id','=','categories.id')
            ->where('category_id',$category)
            ->limit($per)
            ->offset(($page-1)*$per)
            ->with('author');
            if($isAsc==="true"){
                $books=$books->orderBy('final_price');
            }else{
                $books=$books->orderByDesc('final_price');
            }
            $books=$books->get();
            return response()->json($books);
        }
    }
    function filterByAuthor($author,$sort,$per,$page,$isAsc){
        if($sort==="sale"){
            $books=Book::selectSubPrice()
            ->orderByDesc('sub_price')
            ->limit($per)
            ->offset(($page-1)*$per)
            ->join('authors','books.author_id','=','authors.id')
            ->where('author_id',$author)
            ->with('author')
            ->get();
            return response()->json($books);
        }
        else if($sort==="popular"){
            $books=Book::select('books.id','authors.author_name')
            ->join('reviews', 'books.id','=','reviews.book_id')
            ->join('authors', 'books.author_id','=','authors.id')
            ->selectCountComment()
            ->orderByDesc('comment')
            ->selectFinalPrice()
            ->orderBy('final_price')
            ->groupBy('final_price')
            ->groupBy('books.id')
            ->groupBy('authors.author_name')
            ->where('author_id',$author)
            ->limit($per)
            ->offset(($page-1)*$per)
            ->get();
            return response()->json($books);
        }
        else if($sort==="price"){
            $books=Book::select('books.id','authors.author_name','books.author_id')
            ->selectFinalPrice()
            ->join('authors', 'books.author_id','=','authors.id')
            ->groupBy('final_price')
            ->groupBy('books.id')
            ->groupBy('authors.author_name')
            ->groupBy('authors.id')
            ->where('author_id',$author)
            ->limit($per)
            ->offset(($page-1)*$per)
            ->with('author');
            if($isAsc==="true"){
                $books=$books->orderBy('final_price');
            }else{
                $books=$books->orderByDesc('final_price');
            }
            $books=$books->get();
            return response()->json($books);
        }
    }
    //
    function sortByDiscount($per,$page,$isAsc){
        $books=Book::selectSubPrice()
        ->limit($per)
        ->offset(($page-1)*$per)
        ->with('author');
        if($isAsc){
            $books=$books->orderBy('sub_price');
        }else{
            $books=$books->orderByDesc('sub_price');
        }
        $books=$books->get();
        return response()->json($books);
    }
}
