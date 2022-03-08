<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Controller;
use App\View\Components\Timetable;
use Facade\FlareClient\Time\Time;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    public $booked = false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slot1, $slot2, $date, $roomid)

    {   
        return view('events.create', ['slot1' => $slot1, 'slot2' => $slot2, 'date' => $date, 'roomid' => $roomid]);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            // 'room_id' => 'required|integer',
            'user_id' => 'nullable|integer',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'start_date_time' => 'required',
            'end_date_time' => 'required'
        ]);

        $e1 = new Event;
        $e1->room_id = $request->roomid;
        $e1->user_id = Auth::id();
        $e1->name = $validatedData['name'];
        $e1->description = $validatedData['description'];
        $e1->isBooked = true;
        $e1->start_date_time = $validatedData['start_date_time'];
        $e1->end_date_time = $validatedData['end_date_time'];
        $e1->save();

        return redirect()->route('availability', ['room' => $e1->room_id]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', ['event' => $event]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

         return redirect()->route('rooms.show', ['room' => $event->room_id])->with('message', 'Event was deleted.');

    }
}