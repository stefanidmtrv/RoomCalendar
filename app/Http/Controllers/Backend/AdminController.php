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

class AdminController extends Controller
{

    public function dashboard()
    {
        $page_title = 'Dashboard';

        return view('backend.dashboard.index', compact('page_title'));

    }

}