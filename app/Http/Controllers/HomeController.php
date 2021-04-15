<?php

namespace App\Http\Controllers;

use App\Exports\ServersExport;
use App\Http\Requests\CreateServersRequest;
use App\Http\Requests\UpdateServersRequest;
use App\Repositories\ServersRepository;
use App\Http\Controllers\AppBaseController;
use App\Imports\ServersImport;
use App\Models\Servers;
use Illuminate\Http\Request;
use Auth;
use Maatwebsite\Excel\Facades\Excel;
use Flash;
use Illuminate\Support\Facades\Http;
use Response;
use Session;
use DB;
use App\Models\City;
use App\Models\Department;
use App\Models\SolutionLocation;
use App\Models\SolutionType;

class HomeController extends AppBaseController
{
    /** @var  ServersRepository */
    public $serversRepository;
    public $information =[];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ServersRepository $serversRepo)
    {
        $this->middleware('auth');
        $this->serversRepository = $serversRepo;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $information=$this->information;
        // $servers = Servers::query()->with('city')->get()->groupBy('city_id')->toArray();

        // $servers=Servers::get()->groupBy(function($item){
            
        //     return $item->city->name;
        // })->all();
        $servers=Servers::with('solutionLocation','city')->get()->groupBy(
            [
                'city.name', 
                'solutionLocation.name'
                ]);

            // return $item->city->name;


        // $item->solutionLocation->name;
        
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
       
        return view('home', compact( 'servers'));
        
    }
}
