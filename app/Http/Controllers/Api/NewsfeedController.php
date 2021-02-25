<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsFeed;
class NewsfeedController extends Controller
{
    public function getNews()
    {
        $courses = NewsFeed::all();
        $success = $courses;
        return $this->sendResponse($success,'News Find');

    }
}