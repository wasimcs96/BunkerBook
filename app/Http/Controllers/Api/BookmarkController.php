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
    $bookmark = Bookmark::where('business_id',$request->business_id)->where('user_id',$request->user()->id)->get();
        $success = $bookmark;
        return $this->sendResponse($success,'Bookmark Find');
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
            'bookmark_id'=>$request->bookmark_id,
            'business_id'=>$request->business_id,
        ]);
        return $this->sendResponse($bookmark, 'Bookmark Created successfully.');
    }
}
