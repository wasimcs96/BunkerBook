<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class UserFrontController extends Controller
{
    public function index(){
        return view('frontEnd.profile.account_info.account');
    }
    public function update(Request $request , $id){

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->company = $request->company;
        $user->job_title = $request->job_title;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->save();
        return redirect()->route('user.detail');



    }
    public function about(){
        return view('frontEnd.about.about');
    }
}
