<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function index() 
    {

        return view('frontEnd.feedback.feedback');
    }

    public function store(Request $request) {
        $attachment="";
//  dd($request->all());
        if($request->hasFile('image'))
        {
         $banner=$request->image;
         $banner_name= time().$banner->getClientOriginalName();
         $banner->move('uploads/businessbannerimage',$banner_name);
         $attachment = 'uploads/businessbannerimage/'.$banner_name;
        }


        Feedback::create([
            'subject'=>$request->subject,
            'message'=>$request->message,
            'attachment'=>$attachment,
        ]);

        return redirect()->back()->with('success','Feedback Sent Successfully');
    }
}
