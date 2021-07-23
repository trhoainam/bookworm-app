<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['book_id', 'review_title', 'review_details', 'review_date', 'rating_start'];

    public function scopeAverageStar($query){
        return $query->select(DB::raw('case when(avg(CAST (reviews.rating_start AS INTEGER))isnull) 
        then 0 
        else avg(CAST (reviews.rating_start AS INTEGER)) end 
        as star'));
    }
    public function scopeCountComment($query){
        return $query->select(DB::raw('count(reviews.book_id) as comment_count'));
    }
}
