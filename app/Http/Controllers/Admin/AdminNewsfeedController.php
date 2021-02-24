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
            return redirect()->route('news.index')->with('success','Newsfeed updated successfully');
    }
    public function update(Request $request , $id){
        // dd($id);       $storeimg= '';
        $update = NewsFeed::find($id);
        $storeimg = '';
       if($request->has('image')){
        $featured = $request->image;
        $featured_new_name = time() . $featured->getclientOriginalName();

        $featured->move('uploads/newsfeed',$featured_new_name);

        $storeimg = 'uploads/newsfeed/' . $featured_new_name;
        }

        $update->title = $request->title;
        $update->description = $request->description;
        $update->youtube_link = $request->youtube_link;
        $update->image =  $storeimg;
        $update->save();
        return redirect()->route('news.index')->with('success','Newsfeed updated successfully');

    }
    public function destroy($id){
        $store=NewsFeed::find($id);
        $store->delete($id);
        return redirect()->route('news.index')->with('success','Newsfeed updated successfully');
    }
}
