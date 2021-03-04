<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\BusinessRating;
class BusinessFrontController extends Controller
{
    public function detail($id)
    {
        $business = Business::where('id',$id)->first();       
        // dd($business);  
        return view('frontEnd.business.business_detail',compact('business'));
    }

    public function rating(Request $request,$id)
    {
        // dd($request->all());
        // $this->validate($request,[
        //     'rating_number' => 'required',
        // ]);

        BusinessRating::create([
            'user_id'=>auth()->user()->id,
            'comment'=>$request->coment,
            'rating_number'=>$request->rating,
            'business_id'=>$id,
        ]);
        return redirect()->back();
    }
}
