<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Redirect;
use Session;

class AdminUserController extends Controller
{
    public function index()
    {
        // dd('dsfghfd');
        // $users = User::all();
        return view('users.index')->with('users',User::all());
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'profile' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            // 'address' => 'required',
            // 'plan' => 'required',

        ]);

        User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'profile'=>$request->profile,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            // 'address'=>$request->address,
            // 'plan'=>$request->plan,

        ]);



        Session::flash('success', 'User created successfully!');
        $user = User::all();
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('users.index',compact('users'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'profile' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            // 'address' => 'required',
            // 'plan' => 'required',

        ]);

        $user= User::find($id);
        $user->first_name= $request->first_name;
        $user->last_name = $request->last_name;
        $user->profile = $request->profile;
        $user->email = $request->email;
        $user->mobile = $request->mobile;

        $user->save();

        Session::flash('success', 'USer updated successfully!');
        $user = User::all();
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('success', 'Truck updated successfully!');
        return redirect()->route('users.index');
    }
}
