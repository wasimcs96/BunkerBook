<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('category.index',compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $category=Category::find($id);
    
        // dd($category);
        $category->name =$request->name;
        $category->description =$request->Description;
        $category->save();
        $categories=Category::all();
        return view('category.index',compact('categories'))->with('info','category updated successfully');
    }
    public function destroy($id)
    {
        $delete=Category::find($id);
        $delete->delete($id);
        $categories=Category::all();
        return view('category.index',compact('categories'))->with('danger','category deleted successfully');
    }

    public function create(Request $request)
    {
      $storeimg='';
      if($request->has('image'))  {
     
        $featured = $request->image;

        $featured_new_name = time() . $featured->getclientOriginalName();

        $featured->move('uploads/posts',$featured_new_name);

        $storeimg = 'uploads/posts/' . $featured_new_name;
      }
        Category::create([
            'name'=>$request->name,
            'description'=>$request->Description,
            'icon'=>$storeimg
                    ]);
                    $categories=Category::all();
                    return view('category.index',compact('categories'))->with('success','category created successfully');
    }
}
