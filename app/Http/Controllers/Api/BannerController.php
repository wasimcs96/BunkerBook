<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
class BannerController extends Controller
{
    public function getbanner()
    {
    $banner = Banner::orderBy('position','DESC')->get();
    return $this->sendResponse($banner,'Banner find');
    }
}
