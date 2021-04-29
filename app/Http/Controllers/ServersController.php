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
use Carbon\Carbon;


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

        $this->middleware('permission:server-list|server-create|server-edit|server-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:server-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:server-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:server-delete', ['only' => ['destroy']]);
    }



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

        $servers = Servers::paginate(6);

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
        return redirect()->route('servers.index')->with('success', 'Server created successfully.');
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

        if (empty($servers)) {
            Flash::error('Servers not found');

            return redirect(route('servers.index'));
        }

        return view('servers.show', compact('somedropdowns'))->with('servers', $servers);
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

        return redirect()->route('servers.index')->with('success', 'Server updated successfully');
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
        return view('servers.index');
    }



    public function fileImport(Request $request)
    {

        $upload = $request->file('file');
        $ext = pathinfo($upload->getClientOriginalName(), PATHINFO_EXTENSION);
        if ($ext == 'csv') {   
            $filepath = $upload->getRealPath();

            $file = fopen($filepath, 'r');
            $header = fgetcsv($file);
            $escapedHeader = [];
    
            foreach ($header as $key => $value) {
                $lheader = strtolower($value);
                $escapedItem = preg_replace('/[^a-z]/', '', $lheader);
                array_push($escapedHeader, $escapedItem);
            }            
            while ($columns = fgetcsv($file)) {
                foreach ($columns as $key => $value) {
                    $value = preg_replace('/\D/', '', $value);
                }
                $data = array_combine($escapedHeader, $columns);
                // dd($data);
                
                $SMS_city_data = City::firstOrCreate(['name' => $data['city']]);
                $SMS_department_data = Department::firstOrCreate(['name' => $data['department']]);
                $SMS_solution_location_data = SolutionLocation::firstOrCreate(['name' => $data['solutionlocation']]);
                $SMS_solution_type_data = SolutionType::firstOrCreate(['name' =>  $data['solutiontype']]);
                $server = Servers::firstOrNew([ 'Customer_Name'=>$data['customername']]);
                $server->Customer_Name = $data['customername'];
                $server->Server_Password = $data['serverpassword'];
    
                $server->Hardware = $data['hardware'];
                if($server->Service_Contract == 1){
                    $data['servicecontract'] = 1;
                }
                $server->Comment = $data['comment'];
                if ($server->ISD_Allowed == 1) {
                    $data['isdallowed'] = 1;
                }
                $server->Failover_IP = $data['failoverip'];
                $server->Winbox = $data['winbox'];
                $server->Secondary_IP = $data['secondaryip'];
                if ($server->Queue_Stats == 1) {
                    $data['queuestats'] = 1;
                }
                if ($server->Customer_Report == 1) {
                    $data['customerreport'] = 1;
                }
                if ($server->Q_Panel) {
                    $data['qpanel'] = 1;
                }
                $server->SSH_PORT = $data['sshport'];
                $server->HTTP_PORT = $data['httpport'];
                $server->Webmin_PORT = $data['webminport'];
                $server->IP = $data['ip'];
                $server->Solution_Distro = $data['solutiondistro'];
                $server->GUI_Password = $data['guipassword'];
                $server->HTTPS_PORT = $data['httpsport'];
                $server->city_id = $SMS_city_data->id;
                $server->solution_location_id = $SMS_solution_location_data->id;
                $server->department_id = $SMS_department_data->id;
                $server->solution_type_id = $SMS_solution_type_data->id;
                $server->created_at = Carbon::now()->timestamp;
                
                $server->save();
            }           
        }
        else{
            return redirect()->route('servers.index')->with('error','Please upload a CSV file');
        }      
        
        
        return redirect()->route('servers.index')->with('success','Servers imported successfully');
    }



    public function fileExport()
    {
        return Excel::download(new ServersExport, 'servers-collections.csv');
    }



    public function search(Request $request)
    {
        $somedropdowns = $this->somedropdowns;
        $search = $request->input('search');

        $servers = Servers::select('*')->where('Zone', 'LIKE', '%' . $request->search . "%")->orWhere('Customer_Name', 'LIKE', '%' . $request->search . "%")->paginate(5);
        // $servers=Servers::select('id', 'Zone')->where('Zone','LIKE', '%'.$request->search."%")->orWhere('Customer_Name','LIKE', '%'.$request->search."%")->get();

        return view('servers.index', compact('servers',  'somedropdowns'));
    }
}
