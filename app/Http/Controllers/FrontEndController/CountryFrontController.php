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

    public function countryfilter(Request $request){
        $filtcon = $request->country;
        $business = Business::where('country',$filtcon)->get();
        return view ('frontEnd.country_business.business',compact('business','filtcon'));

    }
}
