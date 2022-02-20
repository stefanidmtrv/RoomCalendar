<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Pin;
use App\Models\Event;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::get();
        return view('admin.rooms.index', ['rooms' => $rooms]);
    }

    public function index2()
    {
        return view('rooms.index2');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room,  Request $request)
    {

        $pin = $request->session()->get('pin');

        if ($pin || auth()->user()) {

            $monday = Carbon::now()->startOfWeek()->format('Y-m-d');
            $tuesday = Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d');
            $wednesday = Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d');
            $thursday = Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d');
            $friday = Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d');

            $monday2 = Carbon::now()->startOfWeek()->format('d');
            $tuesday2 = Carbon::now()->startOfWeek()->addWeekday(1)->format('d');
            $wednesday2 = Carbon::now()->startOfWeek()->addWeekday(2)->format('d');
            $thursday2 = Carbon::now()->startOfWeek()->addWeekday(3)->format('d');
            $friday2 = Carbon::now()->startOfWeek()->addWeekday(4)->format('d');


            return view('rooms.show', [
                'room' => $room,
                'pin'  => $pin,
                'monday' => $monday,
                'tuesday' => $tuesday,
                'wednesday' => $wednesday,
                'thursday' => $thursday,
                'friday' => $friday,
                'monday2' => $monday2,
                'tuesday2' => $tuesday2,
                'wednesday2' => $wednesday2,
                'thursday2' => $thursday2,
                'friday2' => $friday2,
            ]);
        } else {
            return view('rooms.pin');
        }
        }

    public function pinCheck(Request $request)
    {

            $pin = Pin::where('pin', $request->pin)->first();

            if($pin) {
                $request->session()->put('pin', $pin);
                return back();
            } else {
                return back();
            }
    }

    public function showAvailability(Request $request, Room $room)
    {
    
        $pin = $request->session()->get('pin');
        
        if ($pin || auth()->user()) {

            $room = Room::where('id', $room->id)->first();
            $events = $room->events;

            $lastHour = Carbon::now()->floorHour(1)->format('Y-m-d H:i:s');
            $nextHour = Carbon::now()->ceilHour(1)->format('Y-m-d H:i:s');

            $lastHourNoDate = Carbon::now()->floorHour(1)->format('H:i:s');
            $nextHourNoDate = Carbon::now()->ceilHour(1)->format('H:i:s');

            $currentHour = Carbon::now()->format('H:i');
            $currentDate = Carbon::now()->format('Y-m-d');

            $myEvent = new Event;

            $isAvailable = true;

            foreach ($events as $event) {

                if (($event->start_date_time == $lastHour) && ($event->end_date_time == $nextHour)) {
                    $isAvailable = false;
                    $myEvent = $event;
                    $myEvent->save();
                }
            }

            return view('rooms.availability', [
                'room' => $room,
                'isAvailable' => $isAvailable,
                'lastHour' => $lastHour,
                'nextHour' => $nextHour,
                'lastHourNoDate' => $lastHourNoDate,
                'nextHourNoDate' => $nextHourNoDate,
                'currentHour' => $currentHour,
                'currentDate' => $currentDate,
            ]);
        } else {
            return view('rooms.pin');
        }
    }

    public function showPins()
    {

        $pins = Pin::get();

        return view('rooms.mpins')->with('pins', $pins);
    }

    public function pinStore(Request $request)
    {
        
        $rooms = Room::get();

        if ($request->pin) {
            $pin = new Pin();
            $pin->pin = $request->pin;
            $pin->room = 0;
            $pin->Save();

        }
        return view('admin.rooms.index', ['rooms' => $rooms]);
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
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('message', 'Event was deleted.');
    }
}
