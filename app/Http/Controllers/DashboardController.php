<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index2(){
        return view('dashboard.index');
    }

    function index3(){
        return view('dashboard.index3');
    }
}
