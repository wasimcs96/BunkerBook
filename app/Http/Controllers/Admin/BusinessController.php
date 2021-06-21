<?php

namespace App\Http\Controllers\Admin;

use App\Models\Business;
use App\Models\BusinessStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use App\Models\BusinessImage;
use App\Models\Category;
use App\Models\BusinessVideo;
use App\Models\BusinessRequest;
use DB;

class BusinessController extends Controller
{
    public function addBusiness()
    {
        return view('business_management.add_business');
    }

    public function store(Request $request)
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
            'plan_type' => $request->plan,
            'name' => $request->name,
            'email' =>collect($request->email)->implode(','),
            'category' =>  collect($request->category)->implode(','),
            'category_name'=> $catim,
            'mobile'=>$request->mobile,
            'business_time'=>$request->business_time,
            'website' => collect($request->website)->implode(','),
            'landline' => collect($request->landline)->implode(','),
            'address' => $request->address,
            'country' => $request->country,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'business_profile' => $business_profile_image,
            'featured_banner_image' => $featured_banner_image,
            'status'=>1,
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
    
    $stfpro = $value['staff_profile'] ?? '';
    
    if($stfpro != '' || $request->file($stfpro))
    {
        // dd($value);
        $staff_profile=$stfpro;
        // dd($staff_profile);
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
        


        //  if($request->hasFile('business_videos'))
        //   {
        //    $businessvideo=$request->business_videos;
       
        //    $businessvideo_name= time().$businessvideo->getClientOriginalName();
        //     $businessvideo->move('uploads/businessvideo',$businessvideo_name);
        //    $business_videos= 'uploads/businessvideo/'.$businessvideo_name;
        //   }
  return redirect()->route('business.active')->with('success','Business Details Added Successfully');
    }

    public function upcomingBusiness()
    {
        $business_list = Business::where('status',0)->orderBy('created_at', 'DESC')->get();
        return view('business_management.upcoming_business_list',compact('business_list'));
    }

    public function activeBusiness()
    {
        $business_list = Business::where('status',1)->orderBy('created_at', 'DESC')->get();
        return view('business_management.active_business',compact('business_list'));
    }

    public function rejectBusiness()
    {
        $business_list = Business::where('status',2)->orderBy('created_at', 'DESC')->get();
        // dd( $reject_business);
        return view('business_management.reject_business', compact('business_list'));
    }

    // public function rejectBusinessModel(Request $request,  $id)
    // {
    //    $reject =  Business::find('id', $id)->first();
    //    Business::create([
    //         $reject->reject_reason = $request->reject_reason
    //    ]);
    //     return redirect()->back();
    // }

    public function editBusiness($id)
    {
        $buisness = Business::find($id);
        // dd($buisness);
        return view('business_management.edit_business', compact('buisness'));
    }

    public function updateBusiness(Request $request ,$id)
    {
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
         $business = Business::find($id);
            $business->plan_type = $request->plan;
            $business->name = $request->name;
            $business->email =collect($request->email)->implode(',');
            $business->category = collect($request->category)->implode(',');
            $business->category_name= $catim;
            $business->mobile = $request->mobile;
            $business->business_time=$request->business_time;
            $business->website =collect($request->website)->implode(',');
            $business->landline = collect($request->landline)->implode(',');
            $business->address = $request->address;
            $business->country = $request->country;
            $business->start_time = $request->start_time;
            $business->end_time = $request->end_time;
            $business->business_profile = $business_profile_image;
            $business->featured_banner_image = $featured_banner_image;
            $business->plan_type = $request->plan;
            $business->about = $request->about;
            $business->ports_of_operation = $request->ports_of_operation;
 
            $business->sunday = $request->sunday;
            $business->sunday_start_time = $request->sunday_start_time;
            $business->sunday_end_time = $request->sunday_end_time;

            $business->monday = $request->monday;
            $business->monday_start_time = $request->monday_start_time;
            $business->monday_end_time = $request->mondaay_end_time;
 
            $business->tuesday = $request->tuesday;
            $business->tuesday_start_time = $request->tuesday_start_time;
            $business->tuesday_end_time = $request->tuesday_end_time;
 
            $business->wednesday = $request->wednesday;
            $business->wednesday_start_time = $request->wednesday_start_time;
            $business->wednesday_end_time = $request->wednesday_end_time;
 
            $business->thursday = $request->thursday;
            $business->thursday_start_time = $request->thursday_start_time;
            $business->thursday_end_time = $request->thursday_end_time;

            $business->friday =$request->friday;
            $business->friday_start_time = $request->friday_start_time;
            $business->friday_end_time = $request->friday_end_time;
 
            $business->saturday  = $request->saturday;
            $business->saturday_start_time = $request->saturday_start_time;
            $business->saturday_end_time = strtotime($request->saturday_end_time);
            
            $business->save();
         
         $staff_profilestore = '';
        if($request->has('staff')){
     
         $bss = BusinessStaff::where('business_id',$id)->get();
            foreach($bss as $bs)
           {
                $bs->delete();
           }
        foreach($request->staff as $key2 => $value)
        
        {
 
    
            $stfpro = $value['staff_profile'] ?? '';
    
            if($stfpro != '' || $request->file($stfpro))
            {
                // dd($value);
                $staff_profile=$stfpro;
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
        
 }
 if($request->hasFile('business_photos'))
 {
         $deletedRows = BusinessImage::where('business_id', '=', $id)->delete();
            $dbps = BusinessImage::where('business_id',$id)->get();
            foreach($dbps as $dbp)
           {
                $dbp->delete();
           }

             $images=collect($request->business_photos);
                 foreach($images as $image){
                 $businessimage_name= time().$image->getClientOriginalName();
                 $image->move('uploads/businessimage',$businessimage_name);
             $business_image= 'uploads/businessimage/'.$businessimage_name;
                
             BusinessImage::create([
                'image' => $business_image,
                'business_id' => $business->id
            ]);
              
                // $bBI->image = $business_image;
                // $bBI->business_id = $id;
                // $bBI->save();
             }
         }
         if($request->has('youtube_video')){

            $bvs = BusinessVideo::where('business_id',$id)->get();
            foreach($bvs as $bv)
           {
                $bv->delete();
           }
             $videos = collect($request->youtube_video);

             foreach($videos as $video){
                     
                       BusinessVideo::create([
                        'video'=> $video,
                        'business_id' => $id
                    ]);
                         
                         }
                        }
 
 
        return redirect()->route('business.active')->with('info','Business Updated Successfully');
    }

    public function viewBusiness($id)
    {
        $view = Business::where('id', $id)->first();
        // dd($view_business);
        return view('business_management.view_business', compact('view'));
    }

    public function destroyBusiness($id)
    {
        $delete_business = Business::find($id);
        $delete_business->delete($id);
        return redirect()->back()->with('danger','Business Deleted Successfully');
    }

    public function status(Request $request , $id){
        // dd($request->all());
        $business= Business::find($id);
        // dd($business);
        $business->status = 1;
        $business->save();
        
        return redirect()->back()->with('success','Business Approved Successfully');
    }

    public function reject(Request $request , $id){
        // dd($request->all());
        $business= Business::find($id);
        $business->status = $request->reject;
        $business->reject_reason = $request->reject_reason;
        $business->save();

        // $busre = BusinessRequest::create([
        // 'user_id'=>$request->user_id,
        // 'business_id'=>$id,
        // 'message'=>$request->reject_reason,
        // 'type'=>2
        // ]);
        
        return redirect()->back()->with('danger','Business Rejected Successfully');
    }

    public function importCreate(){
        return view('business_management.import_business');
    }

    public function importStore(){
        return view('business_management.import_business');
    }

    public function contactBusiness()
    {
        $contacts = BusinessRequest::all();
        return view('business_management.contact',compact('contacts')); 
    }

    public function mediadestroy(Request $request)
    {
        $id = $request->media_id;
        // dd($id);
        $contacts = BusinessImage::find($id);
        // return view('business_management.contact',compact('contacts'));
        $contacts->delete();
          return response()->json([
        'success' => 'image deleted successfully!'
    ]);
    }

    
}


