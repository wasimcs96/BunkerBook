<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function create(){
        return view('pdf.index');
    }

    public function store(){
        
    }
}
