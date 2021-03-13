<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banner.index',compact('banners'));
    }

    public function create(Request $request)
    { $banner = '';
 
   
        if($request->hasFile('image'))
        {
         $banner_image=$request->image;
         $banner_name= time().$banner_image->getClientOriginalName();
         $banner_image->move('uploads/bannerimage',$banner_name);
         $banner = 'uploads/bannerimage/'.$banner_name;
        }

        Banner::create([
            'image'=>$banner,
            'url'=>$request->url,
            'position'=>$request->position,
            'business_id'=>$request->business
        ]);
        return redirect()->route('banner.index')->with('success','Banner Added Successfully');
    }

    public function destroy($id){
        
        $destroy = Banner::find($id);
        $destroy->delete();
        return redirect()->route('banner.index');
    }

    public function update(Request $request ,$id){
        
        // $banner = '';
 
        
                $edit = Banner::find($id);
   
        if($request->hasFile('image'))
        {
         $banner_image=$request->image;
         $banner_name= time().$banner_image->getClientOriginalName();
         $banner_image->move('uploads/bannerimage',$banner_name);
         $edit->image = 'uploads/bannerimage/'.$banner_name;
        }
        $edit->url = $request->url;
        $edit->position = $request->position;
        // $edit->image = $banner;
        $edit->save();
        return redirect()->route('banner.index');
    }
}

