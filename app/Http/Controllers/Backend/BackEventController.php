<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Event;
use App\Models\Room;


class BackEventController extends Controller
{

    public function show()
    {

        $page_title = 'Event Management';
        $empty_message = 'No records found';
        $events = Event::orderBy('id', 'ASC')->get();

        return view('backend.events.show', compact('page_title', 'empty_message', 'events'));
    }

    public function showCreate()
    {

        $page_title = 'Create new event';
        $rooms = Room::orderBy('id', 'asc')->get();

        return view('backend.events.create', compact('page_title', 'rooms'));
    }

    public function store(Request $request)
    {

        $validation_rule = [
            'room_id' => 'required|integer',
            'user_number' => 'required|integer',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'start_date_time' => 'required',
            'end_date_time' => 'required'
        ];

        $request->validate($validation_rule);

        $event = Event::create([
            'room_id' => $request->room_id,
            'user_number' => $request->user_number,
            'name' => $request->name,
            'description' => $request->description,
            'isBooked' => true,
            'start_date_time' => $request->start_date_time,
            'end_date_time' => $request->end_date_time
        ]);

        return redirect()->route('admin.event')->with('message', 'An event has been created');
    }

    public function delete($event)
    {

        $event = Event::where('id', $event)->first();

        $event->delete();

        return back()->with('message', 'An event was deleted');
    }
}
