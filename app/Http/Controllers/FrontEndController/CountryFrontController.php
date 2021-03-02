<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;
class CountryFrontController extends Controller
{
    public function index(){
        $business = Business::all();
        return view ('frontEnd.country_business.business',compact('business'));
    }

    
}
