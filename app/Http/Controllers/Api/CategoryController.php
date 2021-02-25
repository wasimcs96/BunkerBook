<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategory()
        {
    
            $category = Category::all();
            $success = $category;
            return $this->sendResponse($success,'News Find');
        }
}
