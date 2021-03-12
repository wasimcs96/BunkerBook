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
        $email = $request->email;
        return $this->sendResponse($email,'Reset Password link sent to this Email');

    }

    public function forgotPassword(Request $request) {

        $arguments = $request->all();

        $validator = $this->getForgotPasswordValidator($arguments);

        if($validator->fails()){

            return $this->processValidatorErrors($validator->errors());

        }

        $user = User::where('email', '=', $request->email)->first();

        if (is_null($user)) {

          return $this->returnNotFound(['message' => 'User not found']);

        }

        $user->notify(new ResetPasswordNotification($user->id));

        return $this->returnSuccess(['message' => 'We have e-mailed your password reset link!']);

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


