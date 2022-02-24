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

        $page_title = 'Student Number Management';
        $empty_message = 'Not found';
        $stNums = StNum::latest()->paginate(20);

        return view('backend.stmgmt.show', compact('page_title', 'empty_message', 'stNums'));

    }

    public function showCreate() {

        $page_title = 'Create new student number';

        return view('backend.stmgmt.create', compact('page_title'));
    }

    public function store(Request $request) {

        $validation_rule = [
            'stnum' => 'required'
        ];

        $request->validate($validation_rule);

        $stnum = StNum::create(['stnum' => $request->stnum]);

        $notify[] = ['success', 'Student Number has been added.'];
        return redirect()->route('admin.stmgmt')->withNotify($notify);

    }

    public function delete ($stnum) {

        $stnum = StNum::where('id', $stnum)->first();

        $stnum->delete();

        $notify[] = ['success', 'Student Number has been deleted.'];

        return back()->withNotify($notify);
    }

}