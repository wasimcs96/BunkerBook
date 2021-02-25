<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Validator;
class FeedbackController extends Controller
{
    public function getFeedback()
    {
        // return response()->json(Feedback::get(), 200);

        $feedback = Feedback::all();
        $success = $feedback;
        return $this->sendResponse($success,'Feedback Find');
    }

    public function postFeedback(Request $request){
        $validator = Validator::make($request->all(), [
            'feedback_id' => 'required',
            // 'user_id' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'attachment' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

       
        // $user = User::create([

        // ]);
        // $success = $user;
        // $success['token'] =  $user->createToken('MyApp')->accessToken;
        // return $this->sendResponse($success, 'User register successfully.');

        $feedback = Feedback::create([
            'user_id'=>$request->user()->id,
            'feedback_id'=>$request->feedback_id,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'attachment'=>$request->attachment, 
        ]);
        return $this->sendResponse($feedback, 'Feedback Created successfully.');
    }
}
