<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
class EventController extends Controller
{
     public function index()
     {
          $events = Event::all();
         return view('event.index',compact('events'));
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
         Event::create([
 
             'title'=>$request->title,
             'description'=>$request->description,
             'image'=>$storeimg,
             'youtube_link'=>$request->youtube_link
             ]);
             return redirect()->route('event.index')->with('success','Event Created successfully');
     }
     public function update(Request $request , $id){
         // dd($id);       $storeimg= '';
         $update = Event::find($id);
     //     $storeimg = '';
        if($request->has('image')){
         $featured = $request->image;
         $featured_new_name = time() . $featured->getclientOriginalName();
 
         $featured->move('uploads/newsfeed',$featured_new_name);
 
         $update->image  = 'uploads/newsfeed/' . $featured_new_name;
         }
 
         $update->title = $request->title;
         $update->description = $request->description;
         $update->youtube_link = $request->youtube_link;
         $update->save();
         return redirect()->route('event.index')->with('success','Event updated successfully');
 
     }
     public function destroy($id){
         $store=Event::find($id);
         $store->delete($id);
         return redirect()->route('event.index')->with('success','Event Deleted successfully');
     }
}
