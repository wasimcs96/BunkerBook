<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Business;
class CountryController extends Controller
{
    public function getCountry()
    {
        $country = Country::all();
        $success = $country;
        return $this->sendResponse($success,'Country Find');
    }

    public function getbusinesscount(Request $request){

        $count = Business::where('country',$request->id)->count();

        return $this->sendResponse($count,'business count Find');

    }

    Public function getcountrybusiness(Request $request)
    {
        $business = Business::where('country',$request->id)->select('id','name','email','business_profile','category_name','mobile')->get();

        return $this->sendResponse($business,'business count Find');


    }
}
