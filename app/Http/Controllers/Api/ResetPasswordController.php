<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;


class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/dashboard/index2';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('user.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}

