<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Models\Activity;

class ActivityLoggerController extends Controller
{
    public function index(Request $request)
    {
        $activitylogs = Activity::orderBy('id', 'DESC')->get();
        return view('activitylogs.index',compact('activitylogs'));
    }
}
