<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Room;
use App\Mail\RoomBooked;
use Mail;


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
            'user_number' => 'required|max:10',
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
            'start_date_time' => $request->start_date_time,
            'end_date_time' => $request->end_date_time
        ]);

        if($event->user_number != null) {
            $email = $event->user_number . "@swansea.ac.uk";
 
            
         Mail::to($email)
             ->send(new RoomBooked($event));
         }

        return redirect()->route('admin.event')->with('message', 'An event has been created');
    }
    public function edit($event)
    {
        $event = Event::where('id', $event)->first();
        $page_title = 'Update an event';
        $rooms = Room::orderBy('id', 'asc')->get();

        return view('backend.events.edit', compact('page_title', 'rooms', 'event'));
    }

    public function update(Request $request, $event)
    {
        $event = Event::where('id', $event)->first();

        $validation_rule = [
            'room_id' => 'required|integer',
            'user_number' => 'required|max:10',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'start_date_time' => 'required',
            'end_date_time' => 'required'
        ];

        $request->validate($validation_rule);

        $event->update([
            'room_id' => $request->room_id,
            'user_number' => $request->user_number,
            'name' => $request->name,
            'description' => $request->description,
            'start_date_time' => $request->start_date_time,
            'end_date_time' => $request->end_date_time
        ]);


        return redirect()->route('admin.event')->with('message', 'An event has been updated');
    }
    public function delete($event)
    {
        
        $event = Event::where('id', $event)->first();

        $event->delete();

        return back()->with('message', 'An event was deleted');
    }
}
