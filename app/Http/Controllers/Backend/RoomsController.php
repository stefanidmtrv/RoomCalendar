<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Room;
use App\Models\Floor;


class RoomsController extends Controller
{
    public function show()
    {

        $page_title = 'Room Management';
        $empty_message = 'Not found';
        $rooms = Room::orderBy('id', 'ASC')->get();

        return view('backend.rooms.show', compact('page_title', 'empty_message', 'rooms'));
    }

    public function showCreate()
    {

        $page_title = 'Create new floor';
        $buildings = Building::orderBy('id', 'asc')->get();
        $floors = Floor::orderBy('id', 'asc')->get();
        return view('backend.rooms.create', compact('page_title', 'buildings', 'floors'));
    }

    public function store(Request $request)
    {

        $validation_rule = [
            'floor_id' => 'required',
            'table_capacity' => 'required|numeric',
            'computer_capacity' => 'required|numeric',
            'number_of_projectors' => 'required|numeric'
        ];

        $request->validate($validation_rule);

        $room = Room::create([
            'floor_id' => $request->floor_id,
            'table_capacity' => $request->table_capacity,
            'computer_capacity' => $request->computer_capacity,
            'number_of_projectors' => $request->number_of_projectors
        ]);

        return redirect()->route('admin.room')->with('message', 'A room has been created');
    }

    public function delete($room)
    {

        $room = Room::where('id', $room)->first();

        $room->delete();

        return back()->with('message', 'A room has been created');
    }
}
