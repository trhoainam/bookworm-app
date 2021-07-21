<?php

namespace App\Http\Controllers\API;

use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function listAuthor(){
        $authors=Author::all();
        return response()->json($authors);
    }
}
