<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResetEmailController extends Controller
{
    public function sentemail(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required', Rule::exists('users')->where(function ($query) {
                        $query->where('email', $request->email);
                        }), 
          
        ]);
        if($validator->fails()){
            return $this->sendError('Email Does Not exist in our Database.', $validator->errors());
        }
    }
}
