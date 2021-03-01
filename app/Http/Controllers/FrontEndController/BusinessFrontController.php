<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;
class BusinessFrontController extends Controller
{
    public function detail($id)
    {
        $business = Business::where('id',$id)->first();       
        // dd($business);  
        return view('frontEnd.business.business_detail',compact('business'));
    }
}
