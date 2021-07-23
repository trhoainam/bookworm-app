<?php

namespace App\Http\Controllers\API;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function top10Discounts()
    {
        $books = Book::selectSubPrice()
            ->orderByDesc('sub_price')
            ->selectFinalPrice()
            ->limit(10)
            ->with('author')
            ->get();
        return response()->json($books);
    }
    public function top8Recommends()
    {
        $books = Book::select('books.id','books.*')
            ->join('reviews', 'books.id', '=', 'reviews.book_id')
            ->selectAverageStar()
            ->orderByDesc('star')
            ->selectFinalPrice()
            ->orderBy('final_price')
            ->groupBy('final_price')
            ->groupBy('books.id')
            ->limit(8)
            ->with('author')
            ->get();
        return response()->json($books);
    }
    public function top8Populars()
    {
        $books = Book::select('books.id', 'books.*')
            ->join('reviews', 'books.id', '=', 'reviews.book_id')
            ->selectCountComment()
            ->orderByDesc('comment')
            ->selectFinalPrice()
            ->orderBy('final_price')
            ->groupBy('final_price')
            ->groupBy('books.id')
            ->limit(8)
            ->with('author')
            ->get();
        return response()->json($books);
    }
    public function getBookById($id)
    {
        try{
        $book = Book::where('books.id', $id)
            ->select('books.*')
            ->with('author')
            ->with('category')
            ->with('reviews')
            ->selectFinalPrice()
            ->get();
        return response()->json($book);
        }
        catch(Exception $e){
            return response()->json([
                'message'=>"Sách không tồn tại" 
            ],403);
        }
    }
    
    public function getBooksByFilter(Request $request)
    {
        $filterBy = $request->get('filter_by') ? $request->get('filter_by') : 'categories.id';
        $filterVal = $request->get('filter_value') ? $request->get('filter_value') : 1;
        $sort = $request->get('sort') ? $request->get('sort') : 'sale';
        $per = $request->get('per') ? $request->get('per') : 20;

        $query = Book::select('books.id', 'books.*')
            ->with('author', 'category', 'reviews')
            ->selectFinalPrice()
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->leftJoin('reviews', 'books.id', '=', 'reviews.book_id')
            ->selectCountComment()    
            ->selectSubPrice()
            ->addSelect(DB::raw('case when(avg(CAST (reviews.rating_start AS INTEGER))isnull) 
        then 0 
        else avg(CAST (reviews.rating_start AS INTEGER)) end 
        as star'))
            ->groupBy('books.id')
            ->groupBy('final_price');

        if ($filterBy != 'staravg') {
            $query = $query->where($filterBy, $filterVal);
        } else {
            $query = $query->havingRaw("avg(CAST (reviews.rating_start AS INTEGER)) >=?", [$filterVal]);
        }
        switch ($sort) {
            case "popularity":
                $query = $query
                    ->orderByDesc('comment')
                    ->orderBy('final_price');
                break;

            case "price_asc":
                $query = $query->orderBy('final_price');
                break;

            case "price_desc":
                $query = $query->orderByDesc('final_price');
                break;

            default:
                $query = $query
                    ->orderByDesc('sub_price')
                    ->orderBy('final_price');
        }
        $books = $query->paginate($per);
        return response()->json($books);
    }
}
