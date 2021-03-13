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
        $data=[];
        $countries = Country::all();

        foreach($countries as $country){
        
            $book = Business::where('country',$country->id)->count();
             $country['count']=$book;
            array_push($data,$country);
         
        }
        // $success = $country;
        return $this->sendResponse($data,'Country Find');
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
