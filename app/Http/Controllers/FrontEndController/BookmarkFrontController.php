<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bookmark;
class BookmarkFrontController extends Controller
{
    public function index()
    {
        $books= auth()->user()->bookmark;
        // dd($books);
        return view('frontEnd.profile.bookmark.bookmark',compact('books'));
    }

    public function postbookmark(Request $request)
    {
        // dd($request->all());

        Bookmark::create([
            'user_id'=>auth()->user()->id,
            'business_id'=>$request->media_id,
        ]);
        return response()->json([
            'success' => 'Bookmark added successfully!'
        ]);
    }

    public function deletebookmark(Request $request)
    {
        // dd($request->all());

       $delete = Bookmark::where('user_id',auth()->user()->id)->where('business_id',$request->media_id);
       $delete->delete();
        return response()->json([
            'success' => 'Bookmark Added Successfully'
        ]);
    }
}
