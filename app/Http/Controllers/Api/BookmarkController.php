<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use Validator;

class BookmarkController extends Controller
{
    public function getBookmark(Request $request)
    {

    $bookmark = Bookmark::where('user_id',$request->user()->id)->get();
    $business=[];
    foreach($bookmark as $key=>$book){
        // dd($book->business->category_name);
        $business[$key] = $book->business;
        
         $cat = explode(',',$book->business->category_name);
         $business[$key]['category'] = $cat;
      
    }
        return $this->sendResponse($business,'Bookmark list found.');
    }

    public function postBookmark(Request $request){
        $validator = Validator::make($request->all(), [
            'business_id' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $bookmark = Bookmark::create([
            'user_id'=>$request->user()->id,
            // 'bookmark_id'=>$request->bookmark_id,
            'business_id'=>$request->business_id,
        ]);
        return $this->sendResponse($bookmark, 'Added to Bookmark.');
    }

    public function deleteBookmark(Request $request)
    {
        $book = Bookmark::where('business_id',$request->business_id)->where('user_id',$request->user()->id)->first();
        // dd($book);
        $book->delete();

        return $this->sendResponse($book, 'Removed from Bookmark.');


    }
}
