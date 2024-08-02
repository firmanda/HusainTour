<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Fetch all events from the database
        $events = Event::all();

        // Pass the events to the view
        return view('events.index', compact('events'));
    }
}
