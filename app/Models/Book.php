<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }
    
    public function scopeSelectSubPrice($query)
    {
        return $query
            ->addSelect([
                'sub_price' => DB::table('books as other_books')
                ->selectRaw('CASE WHEN (discounts.discount_price isnull) THEN 0 ELSE books.book_price - discounts.discount_price end')
                ->leftJoin('discounts', function ($join) {
                    $join->on('other_books.id', '=', 'discounts.book_id')
                        ->where(function($query){
                            $query->where(function($query){
                                $query->whereDate('discount_start_date', '<=', now())
                                             ->whereDate('discount_end_date','>=',now());
                             })
                             ->orWhere(function ($query) {
                              $query->whereDate('discount_start_date', '<=', now())
                                     ->WhereNull('discount_end_date');
                             });
                        });
                })
                ->whereColumn('other_books.id','=','books.id')
            ]);
    }
    public function scopeSelectAverageStar($query){
        return $query->addSelect([
            'star'=>Review::averageStar()
                ->whereColumn('book_id','books.id')
        ]);
    }
    public function scopeSelectCountComment($query){
        return $query->addSelect([
            'comment'=>Review::countComment()
                ->whereColumn('book_id','books.id')
        ]);
    }
    
    public function scopeSelectFinalPrice($query)
    {
        return $query->selectRaw('CASE WHEN (discounts.discount_price isnull) THEN books.book_price ELSE discounts.discount_price end  as final_price')
            ->leftJoin('discounts', function ($join) {
                $join->on('books.id', '=', 'discounts.book_id')
                    ->where(function($query){
                        $query->where(function($query){
                            $query->whereDate('discount_start_date', '<=', now())
                                         ->whereDate('discount_end_date','>=',now());
                         })
                         ->orWhere(function ($query) {
                          $query->whereDate('discount_start_date', '<=', now())
                                 ->WhereNull('discount_end_date');
                         });
                    });
            });
    }
}
