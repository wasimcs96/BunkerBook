<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;

class AdminFeedbackController extends Controller
{ 
    public function index()
 {
    return view('feedback.index')->with('feedbacks', Feedback::all());  
 }

}
