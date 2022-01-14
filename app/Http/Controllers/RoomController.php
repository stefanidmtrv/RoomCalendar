<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        return view('rooms.index', ['rooms' => $rooms]);
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
    public function show(Room $room)
    {
        $monday = Carbon::now()->startOfWeek()->format('Y-m-d');
        $tuesday = Carbon::now()->startOfWeek()->addWeekday(1)->format('Y-m-d');
        $wednesday = Carbon::now()->startOfWeek()->addWeekday(2)->format('Y-m-d');
        $thursday = Carbon::now()->startOfWeek()->addWeekday(3)->format('Y-m-d');
        $friday = Carbon::now()->startOfWeek()->addWeekday(4)->format('Y-m-d');

        return view('rooms.show', ['room' => $room,
                    'monday' => $monday, 
                    'tuesday' => $tuesday, 
                    'wednesday' => $wednesday,
                    'thursday' => $thursday,
                    'friday' => $friday]);
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
