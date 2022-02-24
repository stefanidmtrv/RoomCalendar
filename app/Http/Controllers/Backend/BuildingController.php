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
        $empty_message = 'Not found';
        $buildings = Building::latest()->paginate(20);

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
            'name' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ];

        $request->validate($validation_rule);

        $building = Building::create([
            'name' => $request->name,
            'opening_time' => $request->opening_time, 'closing_time' => $request->closing_time,
            'latitude' => $request->latitude, 'longitude' => $request->longitude
        ]);

        $notify[] = ['success', 'Building has been added.'];
        return redirect()->route('admin.building')->withNotify($notify);
    }

    public function delete($building)
    {

        $building = Building::where('id', $building)->first();

        $building->delete();

        $notify[] = ['success', 'Building has been deleted.'];

        return back()->withNotify($notify);
    }
}
