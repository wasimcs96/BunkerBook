<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookmarkFrontController extends Controller
{
    public function index()
    {
        $books= auth()->user()->bookmark;
        // dd($books);
        return view('frontEnd.profile.bookmark.bookmark',compact('books'));
    }
}
