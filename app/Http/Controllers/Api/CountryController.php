<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;

class CountryController extends Controller
{
    public function getCountry()
    {
        $country = Country::all();
        $success = $country;
        return $this->sendResponse($success,'Country Find');
    }
}
