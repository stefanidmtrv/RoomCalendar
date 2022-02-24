<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Floor;
use App\Models\Building;



class FloorController extends Controller
{
    public function show()
    {

        $page_title = 'Floor Management';
        $empty_message = 'Not found';
        $floors = Floor::latest()->paginate(20);

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
            'building_id' => 'required',
            'number' => 'required'
        ];

        $request->validate($validation_rule);

        $floor = Floor::create([
            'building_id' => $request->building_id,
            'number' => $request->number
        ]);

        $notify[] = ['success', 'Floor has been added.'];
        return redirect()->route('admin.floor')->withNotify($notify);
    }

    public function delete($floor)
    {

        $floor = Floor::where('id', $floor)->first();

        $floor->delete();

        $notify[] = ['success', 'Floor has been deleted.'];

        return back()->withNotify($notify);
    }
}
