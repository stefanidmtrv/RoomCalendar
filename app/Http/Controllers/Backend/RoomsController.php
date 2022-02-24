<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Room;



class RoomsController extends Controller
{
    public function show()
    {

        $page_title = 'Room Management';
        $empty_message = 'Not found';
        $rooms = Room::latest()->paginate(20);

        return view('backend.rooms.show', compact('page_title', 'empty_message', 'rooms'));
    }

    public function showCreate()
    {

        $page_title = 'Create new floor';

        return view('backend.rooms.create', compact('page_title'));
    }

    public function store(Request $request)
    {

        $validation_rule = [
            'floor_id' => 'required',
            'table_capacity' => 'required',
            'computer_capacity' => 'required',
            'number_of_projectors' => 'required'
        ];

        $request->validate($validation_rule);

        $room = Room::create([
            'floor_id' => $request->floor_id,
            'table_capacity' => $request->table_capacity,
            'computer_capacity' => $request->computer_capacity,
            'number_of_projectors' => $request->number_of_projectors
        ]);

        $notify[] = ['success', 'Room has been added.'];
        return redirect()->route('admin.room')->withNotify($notify);
    }

    public function delete($room)
    {

        $room = Room::where('id', $room)->first();

        $room->delete();

        $notify[] = ['success', 'Room has been deleted.'];

        return back()->withNotify($notify);
    }
}
