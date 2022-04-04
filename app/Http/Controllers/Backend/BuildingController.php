<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Building;


class BuildingController extends Controller
{
    
    public function show()
    {

        $page_title = 'Building Management';
        $empty_message = 'No records found';
        $buildings = Building::orderBy('id', 'ASC')->get();

        return view('backend.buildings.show', compact('page_title', 'empty_message', 'buildings'));
    }

    public function showCreate()
    {

        $page_title = 'Create new building';

        return view('backend.buildings.create', compact('page_title'));
    }

    public function store(Request $request)
    {

        $validation_rule = [
            'name' => 'required|max:255',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric'
        ];

        $request->validate($validation_rule);

        $building = Building::create([
            'name' => $request->name,
            'opening_time' => $request->opening_time,
             'closing_time' => $request->closing_time,
            'latitude' => $request->latitude,
             'longitude' => $request->longitude
        ]);

        return redirect()->route('admin.building')->with('message', 'A building has been created');
    }

    public function delete($building)
    {

        $building = Building::where('id', $building)->first();

        $building->delete();

        return back()->with('message', 'A building has been deleted');
    }
}
