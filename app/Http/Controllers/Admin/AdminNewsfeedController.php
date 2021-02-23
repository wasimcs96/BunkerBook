<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsFeed;
class AdminNewsfeedController extends Controller
{
    public function index()
    {
        $news = NewsFeed::all();
        return view('news.index',compact('news'));
    }

    public function create(Request $request)
    { 
       $storeimg= '';
       if($request->has('image')){
            $featured = $request->image;
            $featured_new_name = time() . $featured->getclientOriginalName();

            $featured->move('uploads/newsfeed',$featured_new_name);

            $storeimg = 'uploads/newsfeed/' . $featured_new_name;
            }
        NewsFeed::create([

            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$storeimg,
            'youtube_link'=>$request->youtube_link
            ]);
            return redirect('/news');
    }
}
