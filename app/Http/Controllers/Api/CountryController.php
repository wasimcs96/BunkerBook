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
        
            $book = Business::where('status',1)->where('country',$country->id)->count();
             $country['count']=$book;
            array_push($data,$country);
         
        }
        // $success = $country;
        return $this->sendResponse($data,'Country Find');
    }

    public function getbusinesscount(Request $request){

        $count = Business::where('status',1)->where('country',$request->id)->count();

        return $this->sendResponse($count,'business count Find');

    }

    Public function getcountrybusiness(Request $request)
    {
        $data=[];
        $business = Business::where('status',1)->where('country',$request->id)->select('id','name','email','business_profile','category_name','mobile')->get();

        foreach($business as $buisnes){
        
            // $book = Bookmark::where('user_id',$request->user()->id)->where('business_id',$buisnes->id)->count();
            $buisnes['category']=explode(',',$buisnes->category_name) ;
            // if($book > 0)
            // {
            //     $buisnes['is_bookmark']= 1;
            // }
            // else{
            //     $buisnes['is_bookmark']= 0 ;
            // }
            array_push($data,$buisnes);
         
        }
        return $this->sendResponse($data,'business count Find');


    }
}
