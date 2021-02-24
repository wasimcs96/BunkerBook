<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'medium' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password']=Hash::make($input['password']);
        $user = User::create($input);
        $success = $user;
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        return $this->sendResponse($success, 'User register successfully.');
    }

    public function login (Request $request) {
        $user = User::where('mobile', $request->mobile)->first();
        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $success = $user;
                $success['token'] =  $user->createToken('MyApp')->accessToken;

                return $this->sendResponse($success, 'User has been logged in successfully.');
            } else {
                return $this->sendError('Password missmatch');
            }
        } else {
            return $this->sendError('User does not exist');
        }
    }

    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $success = [];
        return $this->sendResponse($success, 'You have been successfully logged out!');
    }

    public function getUser (Request $request){
        $success =  $request->user();
       
        return $this->sendResponse($success, 'User Access successfully.');
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required|unique:users,mobile,' . $request->user()->id
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $userData=$request->user();
        $updateUser = $userData->update([
         'first_name'=>$request->first_name,
         'last_name'=>$request->last_name,
         'mobile'=>$request->mobile
        ]);

        return $this->sendResponse($userData, 'User Update successfully.');
    }

    public function checkMobileNumberExits(Request $request){
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|numeric|unique:users'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        return $this->sendResponse(array(), 'Mobile number is not exists.');
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        if (Hash::check($request->old_password, $user->password)) {
            $user->update(['password' => $request->password]);
        }else{
            return $this->sendError('Validation Error.', '', "The current password is not match with old password.");
        }
        return $this->sendResponse(array(), 'Password successfully updated');

    }

    public function forgotPassword(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|numeric', Rule::exists('users')->where(function ($query) {
                        $query->where('mobile', $request->mobile);
                        }), 
            'password' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::where("mobile", $request->mobile)->status("1")->first();
        if ($user) {
            $password=Hash::make($request->password);
            $user->update(['password' => $password]);
        }else{
            return $this->sendError('Validation Error.', '', "Given Mobile Number Not Exists!");
        }
        return $this->sendResponse(array(), 'Password successfully updated');

    }




    

}