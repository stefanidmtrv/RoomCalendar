<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Floor;
use App\Models\Building;


class FloorController extends Controller
{
    public function show()
    {

        $page_title = 'Floor Management';
        $empty_message = 'No records found';
        $floors = Floor::orderBy('id', 'ASC')->get();

        return view('backend.floors.show', compact('page_title', 'empty_message', 'floors'));
    }

    public function showCreate()
    {
        $buildings = Building::get();

        $page_title = 'Create new floor';

        return view('backend.floors.create', compact('page_title', 'buildings'));
    }

    public function store(Request $request)
    {

        $validation_rule = [
            'building_id' => 'required|numeric',
            'number' => 'required|numeric'
        ];

        $request->validate($validation_rule);

        $floor = Floor::create([
            'building_id' => $request->building_id,
            'number' => $request->number
        ]);

        return redirect()->route('admin.floor')->with('message', 'A floor has been created');
    }

    public function delete($floor)
    {

        $floor = Floor::where('id', $floor)->first();

        $floor->delete();

        return back()->with('message', 'A floor has been deleted');
    }
}
