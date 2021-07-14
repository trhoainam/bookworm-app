<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('on-sale-books',[BookController::class,'top10Discounts']);
Route::get('recommend-books',[BookController::class,'top8Recommends']);
Route::get('popular-books',[BookController::class,'top8Populars']);
Route::get('books/{id}',[BookController::class,'getBookById']);
Route::get('filter-by-category/{category}/{sort}/{per}/{page}/{isAsc}',[BookController::class,'filterByCategory']);
Route::get('filter-by-author/{author}/{sort}/{per}/{page}/{isAsc}',[BookController::class,'filterByAuthor']);
//
Route::get('on-sale-books/{per}/{page}/{isAsc}',[BookController::class,'sortByDiscount']);
