<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function getReview($id, Request $request)
    {
        $headerCollection = Book::select('books.id')
            ->where('books.id', $id)
            ->whereRaw('reviews.rating_start is not null')
            ->addSelect(DB::raw('sum(case when cast(reviews.rating_start as integer)=5 then 1 else 0 end) as star5'))
            ->addSelect(DB::raw('sum(case when cast(reviews.rating_start as integer)=4 then 1 else 0 end) as star4'))
            ->addSelect(DB::raw('sum(case when cast(reviews.rating_start as integer)=3 then 1 else 0 end) as star3'))
            ->addSelect(DB::raw('sum(case when cast(reviews.rating_start as integer)=2 then 1 else 0 end) as star2'))
            ->addSelect(DB::raw('sum(case when cast(reviews.rating_start as integer)=1 then 1 else 0 end) as star1'))
            ->addSelect(DB::raw('(case when avg(CAST (reviews.rating_start AS INTEGER)) isnull then 0 else count(*) end) as total'))
            ->addSelect(DB::raw('case when avg(CAST (reviews.rating_start AS INTEGER)) isnull then 0 else avg(CAST (reviews.rating_start AS INTEGER)) end as avg_star'))
            ->leftJoin('reviews', 'books.id', '=', 'reviews.book_id')
            ->groupBy('books.id')
            ->get();
        $reviewsCollection = Book::select('reviews.*')
            ->leftJoin('reviews', 'books.id', '=', 'reviews.book_id')
            ->where('books.id', $id);


        $filterBy = $request->get('filter_by') ? $request->get('filter_by') : 'total';
        $filterVal = $request->get('filter_value') ? $request->get('filter_value') : '1';
        $sort = $request->get('sort') ? $request->get('sort') : 'new';
        $per = $request->get('per') ? $request->get('per') : 20;

        if ($filterBy != 'total') {
            $reviewsCollection = $reviewsCollection->where($filterBy, $filterVal);
        }
        switch ($sort) {
            case "old":
                $reviewsCollection = $reviewsCollection
                    ->orderBy('reviews.review_date');
                break;

            default:
                $reviewsCollection = $reviewsCollection
                    ->orderByDesc('reviews.review_date');
        }
        $reviewsCollection = $reviewsCollection->paginate($per);
        $header = array('header' => $headerCollection->toArray());
        $reviews = array('reviews' => $reviewsCollection->toArray());
        $result = array_merge($header, $reviews);
        return response()->json($result);
    }
    public function postReview($id, Request $request)
    {
        $title = $request->get('review_title') ? $request->get('review_title') : 'Title';
        $content = $request->get('review_details') ? $request->get('review_details') : 'Content';
        $star = $request->get('rating_start') ? $request->get('rating_start') : '1';
        $review = Review::create([
            'book_id' => $id,
            'review_title' => $title,
            'review_details' => $content,
            'review_date' => now(),
            'rating_start' => $star
        ]);
        return response()->json($review,200);
    }
}
