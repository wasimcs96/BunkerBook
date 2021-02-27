<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
class CategoryFrontController extends Controller
{
    public function index()
{
    $category=Category::all();
    return view('frontEnd.category.category',compact('category'));
}

public function businesslist()
{
    // $business=Business::();
    return view('frontEnd.category.category',compact('category'));
}
}
