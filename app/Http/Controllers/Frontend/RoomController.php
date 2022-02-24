<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Room;
use App\Models\Pin;
use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Models\StNum;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::get();
        return view('admin.rooms.index', ['rooms' => $rooms]);
    }

    public function index2()
    {
        return view('frontend.rooms.index2');
    }

    public function show(Room $room,  Request $request)
    {

        $stnum = $request->session()->get('stnum');

        if ($stnum || auth()->user()) {

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


            return view('frontend.rooms.show', [
                'room' => $room,
                'pin'  => $stnum,
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
            return view('frontend.rooms.pin');
        }
    }

    public function pinCheck(Request $request)
    {
        
        $stnum = StNum::where('stnum', $request->stnum)->first();
        
        if ($stnum) {
            $request->session()->put('stnum', $stnum);
            return back();
        } else {
            return back();
        }
    }

    public function showAvailability(Request $request, Room $room)
    {

        $stnum = $request->session()->get('stnum');

        if ($stnum || auth()->user()) {

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

            return view('frontend.rooms.availability', [
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
            return view('frontend.rooms.pin');
        }
    }

    public function showPins()
    {

        $stnums = StNum::get();

        return view('frontend.rooms.mpins')->with('pins', $stnums);
    }

    public function pinStore(Request $request)
    {

        $rooms = Room::get();

        if ($request->stnum) {
            $stnum = new StNum();
            $stnum->stnum = $request->stnum;
            // $pin->room = 0;
            $stnum->Save();
        }
        return view('admin.rooms.index', ['rooms' => $rooms]);
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('message', 'Event was deleted.');
    }
}
