<?php
require 'vendor/autoload.php';
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Mail\NotificationEmail;
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
            //'room_id' => 'required|integer',
            'user_number' => 'nullable|max:10',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'start_date_time' => 'required',
            'end_date_time' => 'required'
        ]);

        $event = Event::create([
            'room_id' => $request->roomid,
            'user_number' => $request->user_number,
            'name' => $request->name,
            'description' => $request->description,
            'start_date_time' => $request->start_date_time,
            'end_date_time' => $request->end_date_time
        ]);

       // $data = ['message' => 'This is a test!'];
        
        //$email = $event->user_number . "@swansea.ac.uk";
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("test@example.com", "Example User");
        $email->setSubject("Sending with SendGrid is Fun");
        $email->addTo("test@example.com", "Example User");
        $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
        $email->addContent(
            "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
        );
        //Mail::to($email)->send(new NotificationEmail($data));

        return redirect()->route('availability', ['room' => $event->room_id]);
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
