<?php

namespace App\Http\Controllers\API;

use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function listAuthor(){
        $authors=Author::orderBy('author_name')->get();
        return response()->json($authors);
    }
}
