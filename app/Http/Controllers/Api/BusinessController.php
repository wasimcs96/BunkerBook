<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;
use Validator;

class BusinessController extends Controller
{
    public function getBusiness()
    {
        $business = Business::with(['businessImage','businessVideo','businessRating','businessRequest','businessStaff'])->get();
        return $this->sendResponse($business,'Business Find');
    }

    public function postBusiness(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            // 'category' => 'required',
            'address' => 'required',

        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $business = Business::create([
            'user_id'=>$request->user()->id,
            'name'=>$request->name,
            'category'=>$request->category,
            'address'=>$request->address,
            'landline'=>$request->landline, 
            'fax'=>$request->fax, 
            'country'=>$request->country, 
            'start_time'=>$request->start_time, 
            'end_time'=>$request->end_time, 
            'business_profile'=>$request->business_profile, 
            'mobile'=>$request->mobile, 
            'email'=>$request->email, 
            'website'=>$request->website, 
            'about'=>$request->about,
            'ports_of_operation'=>$request->ports_of_operation,
            'personal_info'=>$request->personal_info,
            'working_hour'=>$request->working_hour,
            'sunday'=>$request->sunday,
            'sunday_start_time'=>$request->sunday_start_time,
            'sunday_end_time'=>$request->sunday_end_time,
            'monday'=>$request->monday,
            'monday_start_time'=>$request->monday_start_time,
            'monday_end_time'=>$request->monday_end_time,
            'tuesday'=>$request->tuesday,
            'tuesday_start_time'=>$request->tuesday_start_time,
            'tuesday_end_time'=>$request->tuesday_end_time,
            'wednesday'=>$request->wednesday,
            'wednesday_start_time'=>$request->wednesday_start_time,
            'wednesday_end_time'=>$request->wednesday_end_time,
            'thursday'=>$request->thursday,
            'thursday_start_time'=>$request->thursday_start_time,
            'thursday_end_time'=>$request->thursday_end_time,
            'friday'=>$request->friday,
            'friday_start_time'=>$request->friday_start_time,
            'friday_end_time'=>$request->friday_end_time,
            'saturday'=>$request->saturday,
            'saturday_start_time'=>$request->saturday_start_time,
            'saturday_end_time'=>$request->saturday_end_time,

        ]);
        return $this->sendResponse($business, 'Business Created successfully.');
    }
}
