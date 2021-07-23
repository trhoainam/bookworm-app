<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\AuthorController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\ReviewController;
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
//Book
Route::get('on-sale-books',[BookController::class,'top10Discounts']);
Route::get('recommend-books',[BookController::class,'top8Recommends']);
Route::get('popular-books',[BookController::class,'top8Populars']);
Route::get('books/{id}',[BookController::class,'getBookById']);
Route::get('filter',[BookController::class,'getBooksByFilter']);
//Category
Route::get('categories',[CategoryController::class,'listCategory']);
//Author
Route::get('authors',[AuthorController::class,'listAuthor']);
//Cart
Route::post('place-order',[CartController::class,'placeOrder']);
//Review
Route::get('reviews/{id}',[ReviewController::class,'getReview']);
Route::post('reviews/{id}',[ReviewController::class,'postReview']);

