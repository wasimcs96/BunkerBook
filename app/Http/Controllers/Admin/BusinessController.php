<?php

namespace App\Http\Controllers\Admin;

use App\Models\Business;
use App\Models\BusinessStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use App\Models\BusinessImage;
// use App\Models\Category;
use App\Models\BusinessVideo;
use App\Models\Category;
use App\Models\BusinessRequest;
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
            'type' => $request->type,
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

    if($request->file($value['staff_profile']))
    {
        $staff_profile=$value['staff_profile'];
// dd()
        // $staff_profile = $request->profile
        $staff_profile_new_name = time() . $staff_profile->getClientOriginalName();
        $staff_pro->move('uploads/business_staffProfile',$staff_profile_new_name);
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
          $businessprofile=$request->business_photos;
       
          $businessimage_name= time().$businessprofile->getClientOriginalName();
           $businessprofile->move('uploads/businessimage',$businessimage_name);
          $business_image= 'uploads/businessimage/'.$businessimage_name;
            BusinessImage::create([
                'image' => $business_image,
                'business_id' => $business->id
            ]);
          
        
         }
 
        


         if($request->hasFile('business_videos'))
          {
           $businessvideo=$request->business_videos;
       
           $businessvideo_name= time().$businessvideo->getClientOriginalName();
            $businessvideo->move('uploads/businessvideo',$businessvideo_name);
           $business_videos= 'uploads/businessvideo/'.$businessvideo_name;
 
             BusinessVideo::create([
                'video' => $business_videos,
                'business_id' => $business->id
            ]);
             
          }
  return redirect()->route('business.upcoming')->with('success','Business details added successfully');
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

    public function editBusiness(Business $id)
    {
        // dd('dffghjgfgxgfhf');
        return view('business_management.edit_business')->with('business');
    }

    public function updateBusiness()
    {
        return view('business_management.active_business')->with('info','business updated successfully');
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
        return redirect()->back()->with('danger','business deleted successfully');
    }

    public function status(Request $request){
        // dd($request->all());
        $business= Business::find($request->businessid);
        $business->status = $request->accept;
        $business->save();
        
        return response()->json([
            'success' => 'image deleted successfully!'
        ]);
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
}

