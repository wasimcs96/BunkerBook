<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // protected $redirectTo = '/';
    public function redirectTo() {
  $role = auth()->user()->isAdmin();
//   dd($role);
  if($role){
    //   protected $redirectTo = 'admin/panel';
      return 'admin/panel';
  }else{
     return '/';
  }
  
//   switch ($role) {
//     case 'admin':
      
//       break;
 
//     default:
//       return '/'; 
//     break;
//   }
}



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('user.auth.login');
    }
}
