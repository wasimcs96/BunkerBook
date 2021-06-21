<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Notifications\ResetPassword ;
use Illuminate\Validation\Rule;
use Validator;
use App\Notifications\ResetPassword as ResetPasswordNotification;


class ResetEmailController extends Controller
{
    // public function sentemail(Request $request){

    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required', Rule::exists('users')->where(function ($query) {
    //                     $query->where('email', $request->email);
    //                     }), 
          
    //     ]);
    //     if($validator->fails()){
    //         return $this->sendError('Email Does Not exist in our Database.', $validator->errors());
    //     }
    //     $email = $request->email;
    //     return $this->sendResponse($email,'Reset Password link sent to this Email');

    // }

    public function forgotPassword(Request $request) {

        // $arguments = $request->all();

        $validator = Validator::make($request->all(), [
            'email' => 'required'
        ]);

  

        if($validator->fails()){

            return $this->sendError($validator->errors());

        }

        $user = User::where('email', '=', $request->email)->first();

        if (is_null($user)) {

          return $this->sendError( $user, 'User not found');

        }

        // $user->notify(new ResetPasswordNotification($user->id));

        return $this->sendResponse($user,'We have e-mailed your password reset link!');

    }

    /**

       * Get a validator for an incoming post device token request.

       *

       * @param  array  $data

       * @return \Illuminate\Contracts\Validation\Validator

       */

      private function getForgotPasswordValidator($data)

      {

          return Validator::make($data, [

            'email' => 'required|email'

          ]);

      }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest');

    }

}


