<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\BusinessRating;
use App\Models\BusinessStaff;
use App\Models\BusinessImage;
use App\Models\BusinessVideo;
use App\Models\Category;

class BusinessFrontController extends Controller
{
    public function detail($id)
    {
        $business = Business::where('id',$id)->first();       
        // dd($business);  
        return view('frontEnd.business.business_detail',compact('business'));
    }

    public function rating(Request $request,$id)
    {
        // dd($request->all());
        // $this->validate($request,[
        //     'rating_number' => 'required',
        // ]);

        BusinessRating::create([
            'user_id'=>auth()->user()->id,
            'comment'=>$request->coment,
            'rating_number'=>$request->rating,
            'business_id'=>$id,
        ]);
        return redirect()->back();
    }
    public function create(){
        return view('frontEnd.profile.add_business');
    }

    public function postbusiness(Request $request)
    {
         // dd($request);
        // $this->validate($request, [
        //     'email' => '[required]',
        // ]);

        $business_profile_image ='';


       if($request->hasFile('business_profile'))
        {
         $businessprofile=$request->business_profile;
         $businessprofile_name= time().$businessprofile->getClientOriginalName();
          $businessprofile->move('uploads/businessprofileimage',$businessprofile_name);
         $business_profile_image= 'uploads/businessprofileimage/'.$businessprofile_name;
       
        }

        $featured_banner_image = '';

        if($request->hasFile('featured_banner_image'))
        {
         $banner=$request->featured_banner_image;
         $banner_name= time().$banner->getClientOriginalName();
         $st= $banner->move('uploads/businessbannerimage',$banner_name);
         $featured_banner_image = 'uploads/businessbannerimage/'.$banner_name;
        }

      
        
        $catim = null;
        if($request->has('category')){
        $category = $request->category;
        // $cat = explode(',',$category);
        $catfinds = Category::whereIn('id',$category)->pluck('name');
        
        $catim =collect($catfinds)->implode(',');  
        }
// dd($request->all());
        $business = Business::create([
            'mobile' => $request->mobile,
            'name' => $request->name,
            'email' =>collect($request->email)->implode(','),
            'category' =>  collect($request->category)->implode(','),
            'category_name'=> $catim,
            'business_time'=>$request->business_time,
            'website' => collect($request->website)->implode(','),
            'landline' => collect($request->landline)->implode(','),
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
            'saturday_end_time' => strtotime($request->saturday_end_time),
           
        ]);
        $staff_profilestore = '';

      
        //  $business_staff = dd($request->all());
        
foreach($request->staff as $key2 => $value)

{

    if(isset($value['staff_profile']) || $request->file($value['staff_profile']))
    {
        $staff_profile=$value['staff_profile'];
// dd()
        // $staff_profile = $request->profile
        $staff_profile_new_name = time() . $staff_profile->getClientOriginalName();
        $staff_profile->move('uploads/business_staffProfile',$staff_profile_new_name);
        $staff_profilestore = 'uploads/business_staffProfile/' . $staff_profile_new_name;
    }
        BusinessStaff::create([
            'business_id'=> $business->id,
            'staff_name' => $value['staff_name'],       
            'staff_job_title' => $value['staff_job_title'],
            'staff_email' => $value['staff_email'],
            'staff_mobile' => $value['staff_mobile'],
            'staff_skype' => $value['staff_skype'],
            'staff_about' => $value['staff_about'],
            'profile' => $staff_profilestore
        ]);
        }
    
        if($request->hasFile('business_photos'))
        {
        
            $images=collect($request->business_photos);
            // dd(auth()->user());
        // dd($images);
        
            foreach($images as $image){
                $businessimage_name= time().$image->getClientOriginalName();
                $image->move('uploads/businessimage',$businessimage_name);
            $business_image= 'uploads/businessimage/'.$businessimage_name;
                BusinessImage::create([
                    'image' => $business_image,
                    'business_id' => $business->id
                ]);
            }
        }
        
            $videos = collect($request->youtube_video);
            foreach($videos as $video){
                        BusinessVideo::create([
                           'video' => $video,
                           'business_id' => $business->id
                       ]);
                        
                        }
        

                        return redirect()->back();

     
    }
}