<?php

namespace App\Http\Controllers\Admin;

use App\Models\Business;
use App\Models\BusinessStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class BusinessController extends Controller
{
    public function addBusiness()
    {
        return view('business_management.add_business');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => '[required]',
        ]);

        $business_profile_image ='';


       if($request->hasFile('image'))
        {
         $image=$request->business_profile;
         $name= time().$image->getClientOriginalName();
         $st= $image->move(Config::get('define.image.business'),$name);
         $business_profile_image= Config::get('define.image.business').'/'.$name;
        }

        $featured_banner_image = '';

        if($request->hasFile('image'))
        {
         $image=$request->featured_banner_image;
         $name= time().$image->getClientOriginalName();
         $st= $image->move(Config::get('define.image.business'),$name);
         $featured_banner_image = Config::get('define.image.business').'/'.$name;
        }

        $staff_profile = '';

        if($request->hasFile('image'))
        {
         $image=$request->profile;
         $name= time().$image->getClientOriginalName();
         $st= $image->move(Config::get('define.image.business'),$name);
         $staff_profile = Config::get('define.image.business').'/'.$name;
        }

        $business = Business::create([
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'category' =>  collect($request->category)->implode(','),
            //  $request->category,
            'website' => $request->website,
            'landline' => $request->landline,
            'address' => $request->address,
            'country' => $request->country,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'business_profile' => $business_profile_image,
            'featured_banner_image' => $featured_banner_image,

            'about' => $request->about,
            'ports_of_operation' => $request->ports_of_operation,

            'sunday' => $request->sunday,
            'sunday_start_time' => $request->sunday_start_time,
            'sunday_end_time' => $request->sunday_end_time,

            'monday' => $request->monday,
            'monday_start_time' => $request->monday_start_time,
            'monday_end_time' => $request->mondaay_end_time,

            'tuesday' => $request->tuesday,
            'tuesday_start_time' => $request->tuesday_start_time,
            'tuesday_end_time' => $request->tuesday_end_time,

            'wednesday' => $request->wednesday,
            'wednesday_start_time' => $request->wednesday_start_time,
            'wednesday_end_time' => $request->wednesday_end_time,

            'thursday' => $request->thursday,
            'thursday_start_time' => $request->thursday_start_time,
            'thursday_end_time' => $request->thursday_end_time,

            'friday' => $request->friday,
            'friday_start_time' => $request->friday_start_time,
            'friday_end_time' => $request->friday_end_time,

            'saturday'  => $request->saturday,
            'saturday_start_time' => $request->saturday_start_time,
            'saturday_end_time' => $request->saturday_time

        ]);

        $business_staff = BusinessStaff::create([
            'staff_name' => $request->name,
            'staff_job_title' => $request->staff_job_title,
            'staff_email' => $request->staff_email,
            'staff_mobile' => $request->staff_mobile,
            'staff_skype' => $request->staff_skype,
            'staff_about' => $request->staff_about,
            'profile' => $staff_profile
        ]);

        $business->save();
        $business_staff->save();
    }

    public function upcomingBusiness()
    {
        $business_list = Business::orderBy('created_at', 'DESC')->get();
        return view('business_management.upcoming_business_list',compact('business_list'));
    }

    public function activeBusiness()
    {
        $business_list = Business::orderBy('created_at', 'DESC')->get();
        return view('business_management.active_business',compact('business_list'));
    }

    public function rejectBusiness()
    {
        $reject_business = Business::where('reject_reason', '!=', 'null')->get()->first();
        // dd( $reject_business);
        return view('business_management.reject_business', compact('reject_business'));
    }

    public function rejectBusinessModel(Request $request,  $id)
    {
       $reject =  Business::find('id', $id)->first();
       Business::create([
            $reject->reject_reason = $request->reject_reason
       ]);
        return redirect()->back();
    }

    public function editBusiness(Business $id)
    {
        // dd('dffghjgfgxgfhf');
        return view('business_management.edit_business')->with('business');
    }

    public function updateBusiness()
    {
        return view('business_management.active_business');
    }

    public function viewBusiness($id)
    {
        $view = Business::where('id', $id)->first();
        // dd($view_business);
        return view('business_management.view_business', compact('view'));
    }

    public function destroyBusiness($id)
    {
        $delete_business = Business::where('id', $id)->first();
        $delete_business->delete();
    }

}

