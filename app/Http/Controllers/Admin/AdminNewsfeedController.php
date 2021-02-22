<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNewsfeedController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function create()
    {
        return view('news.create');
    }
}
