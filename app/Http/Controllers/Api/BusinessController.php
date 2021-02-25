<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;

class BusinessController extends Controller
{
    public function getBusiness()
    {
        $business = Business::with(['businessImage','businessVideo','businessRating','businessRequest','businessStaff'])->get();
        return $this->sendResponse($business,'Business Find');
    }
}
