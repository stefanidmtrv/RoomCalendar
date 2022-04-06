<?php

namespace App\Http\Controllers\Backend;

use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\Referral;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\StNum;


class StudentManagement extends Controller
{

    public function show () {

        $page_title = 'Student/Staff Number Management';
        $empty_message = 'No records found';
        $stNums = StNum::orderBy('id', 'ASC')->get();

        return view('backend.stmgmt.show', compact('page_title', 'empty_message', 'stNums'));

    }

    public function showCreate() {

        $page_title = 'Create new student/staff number';

        return view('backend.stmgmt.create', compact('page_title'));
    }

    public function store(Request $request) {

        $validation_rule = [
            'stnum' => 'required|integer|unique:stnum,stnum'
        ];

        $request->validate($validation_rule);

        $stnum = StNum::create(['stnum' => $request->stnum]);

        return redirect()->route('admin.stmgmt')->with('message', 'A number has been created');

    }
    public function edit($stnum)
    {
        $stnum = StNum::where('id', $stnum)->first();
        $page_title = 'Update a student/staff number';

        return view('backend.stmgmt.edit', compact('page_title', 'stnum'));
    }

    public function update(Request $request, $stnum)
    {
        $stnum = StNum::where('id', $stnum)->first();

        $validation_rule = [
            'stnum' => 'required|integer|unique:stnum,stnum'
        ];

        $request->validate($validation_rule);

        $stnum->update(['stnum' => $request->stnum]);


        return redirect()->route('admin.room')->with('message', 'A student/staff number has been updated');
    }
    public function delete ($stnum) {

        $stnum = StNum::where('id', $stnum)->first();

        $stnum->delete();

        return back()->with('message', 'A number has been created');
    }

}