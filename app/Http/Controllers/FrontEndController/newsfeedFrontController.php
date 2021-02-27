<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newsfeedFrontController extends Controller
{
   public function index()
   {
       $blogs=NewsFeed::all();
       return view('frontEnd.blog.blog_all',compact('blogs'));
   }
}
