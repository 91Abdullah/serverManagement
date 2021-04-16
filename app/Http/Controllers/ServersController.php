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
use Illuminate\Support\Facades\Input;


class ServersController extends AppBaseController
{
    /** @var  ServersRepository */
    private $serversRepository;
    public $somedropdowns = [];

    public function __construct(ServersRepository $serversRepo)
    {
        $this->serversRepository = $serversRepo;
        $this->somedropdowns = [
            City::pluck('name', 'id'),
            SolutionLocation::pluck('name', 'id'),
            SolutionType::pluck('name', 'id'),
            Department::pluck('name', 'id')
        ];
        
        $this->middleware('permission:server-list|server-create|server-edit|server-delete', ['only' => ['index','show']]);
        $this->middleware('permission:server-create', ['only' => ['create','store']]);
        $this->middleware('permission:server-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:server-delete', ['only' => ['destroy']]);
    }

    // $city = City::pluck('name', 'id'),
    // $solutionLocation = SolutionLocation::pluck('name', 'id'),
    // $solutionType = SolutionType::pluck('name', 'id')


    /**
     * Display a listing of the Servers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $somedropdowns = $this->somedropdowns;
        $number = 0;
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";

        $servers = Servers::paginate(10);

        // return view('servers.index')->with('servers', $servers);
        return view('servers.index', compact('servers', 'number', 'somedropdowns'));
    }
    /**
     * Show the form for creating a new Servers.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $somedropdowns = $this->somedropdowns;
        $user = Auth::user()->id;
        // $user2 = Auth::user();
        // $is_admin = $user2->RoleUser[0]->role->name == "Admin";

        return view('servers.create', compact('user',  'somedropdowns'));
    }

    /**
     * Store a newly created Servers in storage.
     *
     * @param CreateServersRequest $request
     *
     * @return Response
     */
    public function store(CreateServersRequest $request)
    {
        $servers = Servers::create($request->all());
        return redirect()->route('servers.index')->with('success','Server created successfully.');
    }

    /**
     * Display the specified Servers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $somedropdowns = $this->somedropdowns;

        $servers = $this->serversRepository->find($id);
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";

        if (empty($servers)) {
            Flash::error('Servers not found');

            return redirect(route('servers.index'));
        }

        return view('servers.show', compact( 'somedropdowns'))->with('servers', $servers);
    }

    /**
     * Show the form for editing the specified Servers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $somedropdowns = $this->somedropdowns;

        $user = Auth::user()->id;
        $server = $this->serversRepository->find($id);
        // $user2 = Auth::user();
        // $is_admin = $user2->RoleUser[0]->role->name == "Admin";

        // dd($server);
        if (empty($server)) {
            Flash::error('Servers not found');

            return redirect(route('servers.index'));
        }

        return view('servers.edit', compact('user', 'somedropdowns'))->with('server', $server);
    }

    /**
     * Update the specified Servers in storage.
     *
     * @param int $id
     * @param UpdateServersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServersRequest $request)
    {
        $servers = $this->serversRepository->find($id);

        if (empty($servers)) {
            Flash::error('Servers not found');

            return redirect(route('servers.index'));
        }

        $servers = $this->serversRepository->update($request->all(), $id);

        Flash::success('Servers updated successfully.');

        return redirect()->route('servers.index')->with('success','Server updated successfully');
    }

    /**
     * Remove the specified Servers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servers = $this->serversRepository->find($id);

        if (empty($servers)) {
            Flash::error('Servers not found');

            return redirect(route('servers.index'));
        }

        $this->serversRepository->delete($id);

        Flash::success('Servers deleted successfully.');

        return redirect()->route('servers.index')->with('success', 'Server deleted successfully');
    }

    public function fileImportExport()
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        return view('servers.index');
    }



    public function fileImport(Request $request)
    {

        // Excel::import(new ServersImport, $request->import_file);

        // Session::put('success', 'Your file is imported successfully in database.');

        // return back();
        // ------------------------
        // Excel::import(new ServersImport, $request->file('file')->store('temp'));
        // return back();

        Excel::import(new ServersImport, request()->file('file')->store('temp'));

        return back();
        echo "Inserted Successfully";
    }



    public function fileExport($type)
    {
        return Excel::download(new ServersExport, 'servers-collections.' . $type);
    }

    // public function search(Request $request)
    // {
    //     if($request->ajax())
    //     {
    //         $output="";

    //         $servers=Servers::select('id', 'Zone')->where('Zone','LIKE', '%'.$request->search."%")->get();

    //         if($servers){
    //             foreach ($servers as $key => $server) {
    //                 $output.='<tr>'.
    //                 '<td>'.$server->id.'</td>'.
    //                 '<td>'.$server->Zone.'</td>'.
    //                 '</tr>';
    //             }
    //             return Response($output);
    //         }
    //     }
    // }   

    public function search(Request $request)
    {
        $somedropdowns = $this->somedropdowns;
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $search = $request->input('search');

        $servers = Servers::select('*')->where('Zone', 'LIKE', '%' . $request->search . "%")->orWhere('Customer_Name', 'LIKE', '%' . $request->search . "%")->paginate(5);
        // $servers=Servers::select('id', 'Zone')->where('Zone','LIKE', '%'.$request->search."%")->orWhere('Customer_Name','LIKE', '%'.$request->search."%")->get();

        return view('servers.index', compact('servers',  'somedropdowns'));
    }
}
