<?php

namespace App\Http\Controllers\FrontEndController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
class EventFrontController extends Controller
{
    public function event()
    {
        $events=Event::all();

        return view('frontEnd.event.index',compact('events'));
    }

    public function detail($id)
    { 
        $events = Event::find($id);
        
        return view('frontEnd.event.detail',compact('events'));
    }
}

