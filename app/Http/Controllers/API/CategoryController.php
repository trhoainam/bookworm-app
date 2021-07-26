<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCategory(){
        $categories=Category::orderBy('category_name')->get();
        return response()->json($categories);
    }
}
