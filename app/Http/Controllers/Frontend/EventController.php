<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Mail\RoomBooked;
use Mail;


class EventController extends Controller
{

    public static function isBooked(int $room, String $date)
    {
        if (Event::where('room_id', $room)->where('start_date_time', $date)->exists() || 
            (Carbon::parse($date)->addHour(1)->isPast()) || !(Carbon::parse($date)->isCurrentWeek())) {
            return true;
        }
        return false;
        
    }

    public function create($slot1, $slot2, $date, $roomid)

    {
        
        $new_date = $date . " " . $slot1;
        $page_title = 'Create new event';
        
        if(EventController::isBooked($roomid, $new_date)){
            abort(400);
            
        }else{
            return view('frontend.events.create', ['slot1' => $slot1, 'slot2' => $slot2, 'date' => $date, 'roomid' => $roomid, 'page_title' => $page_title]);
        }
        
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            //'room_id' => 'required|integer',
            'user_number' => 'required|max:10',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'start_date_time' => 'required',
            'end_date_time' => 'required'
        ]);

        $event = Event::create([
            'room_id' => $request->roomid,
            'user_number' => $validatedData['user_number'],
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'start_date_time' => $validatedData['start_date_time'],
            'end_date_time' => $validatedData['end_date_time']
        ]);

        if($event->user_number != null) {
           $email = $event->user_number . "@swansea.ac.uk";

           
        Mail::to($email)
            ->send(new RoomBooked($event));
        }
        
        return redirect()->route('availability', ['room' => $event->room_id]);
    }

    public function delete($event)
    {
        
        $event = Event::where('id', $event)->first();

        $event->delete();

        return 'Your event was deleted';
    }
   
}
