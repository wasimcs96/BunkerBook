<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function addBusiness()
    {
        return view('business_management.add_business');
    }
}
