<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
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
    public function create()
    {
        return view('events.create');
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
            // 'user_id' => 'nullable|integer',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            // 'start_date_time' => 'required|date|date_format:d/m/Y H:i',
            // 'end_date_time' => 'required|date|date_format:d/m/Y H:i'
        ]);

        $e1 = new Event;
        $e1->room_id = 5;
        $e1->user_id = 2;
        $e1->name = $validatedData['name'];
        $e1->description = $validatedData['description'];
        $e1->start_date_time = '2020-07-30 18:04:28';
        $e1->end_date_time = '2020-07-30 19:04:28';
        $e1->save();

        return redirect()->route('login')->with('message', 'Display has been added');

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
    public function destroy($id)
    {
        //
    }
}
