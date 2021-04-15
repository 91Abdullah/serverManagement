<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servers;
use DB;
use Carbon\Carbon;

class ChartJsController extends Controller
{
    public function index()
    {
        $year = ['2018', '2019', '2020', '2021'];

        $server = [];

        foreach($year as $key=>$value){
            $server[] = Servers::where(DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        }
        return view('home')->with('year', json_encode($year, JSON_NUMERIC_CHECK))->with('user',json_encode($server, JSON_NUMERIC_CHECK));
    }
}
