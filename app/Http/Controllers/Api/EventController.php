<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
class EventController extends Controller
{
    public function getevent(){
        $event = Event::all();
        return $this->sendResponse($event,'News Find');
    }
}
