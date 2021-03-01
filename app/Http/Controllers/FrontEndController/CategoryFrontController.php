<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use DB;
class CategoryFrontController extends Controller
{
    public function index()
{
    $category=Category::all();
    return view('frontEnd.category.category',compact('category'));
}

public function businesslist($id)
{
    $business=DB::table("business")
    ->whereRaw("find_in_set('$id',category)")->get();
    

    return view('frontEnd.category.business',compact('business'));
}
}
