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

        return redirect()->route('servers.index');
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
                
                if($data['city'] != 'N/A' && $data['city'] != ''){
                    $SMS_city_data = City::firstOrCreate(['name' => str_replace(' ', '', $data['city'])]);
                    $city_id = $SMS_city_data->id;
                }
                else{
                    $city_id = null;
                }
                
                if($data['department'] != 'N/A' && $data['department'] != ''){
                    $SMS_department_data = Department::firstOrCreate(['name' => str_replace(' ', '', $data['department'])]);
                    $department_id = $SMS_department_data->id;
                }
                else{
                    $department_id = null;
                }

                if($data['solutionlocation'] != 'N/A' && $data['solutionlocation'] != ''){
                    $SMS_solution_location_data = SolutionLocation::firstOrCreate(['name' => str_replace(array(' ', ':', '/'), '', $data['solutionlocation'])]);
                    $solution_location_id = $SMS_solution_location_data->id;
                }
                else{
                    $solution_location_id = null;
                }
                
                if($data['solutiontype'] != 'N/A' && $data['solutiontype'] != ''){
                    $SMS_solution_type_data = SolutionType::firstOrCreate(['name' =>  str_replace(' ', '', $data['solutiontype'])]);
                    $solution_type_id = $SMS_solution_type_data->id;
                }
                else{
                    $solution_type_id = null;
                }
                if($data['servicecontract'] == 'Yes' || $data['servicecontract'] == 'yes'  || $data['servicecontract'] == 'y' || $data['servicecontract'] == 'Y')
                {
                    $SMS_service_contract = 'Yes';
                }
                elseif($data['servicecontract'] == 'No' || $data['servicecontract'] == 'no'  || $data['servicecontract'] == 'n' || $data['servicecontract'] == 'N'){
                    $SMS_service_contract = 'No';
                }
                else{
                    $SMS_service_contract = null;
                }
                if($data['isdallowed'] == 'Yes' || $data['isdallowed'] == 'yes'  || $data['isdallowed'] == 'y'  || $data['isdallowed'] == 'Y')
                {
                    $SMS_isd_allowed = 'Yes';
                }
                elseif($data['isdallowed'] == 'No' || $data['isdallowed'] == 'no'  || $data['isdallowed'] == 'n'  || $data['isdallowed'] == 'N'){
                    $SMS_isd_allowed = 'No';
                }
                else{
                    $SMS_isd_allowed = null;
                }
                if($data['queuestats'] == 'Yes' || $data['queuestats'] == 'yes'  || $data['queuestats'] == 'y' || $data['queuestats'] == 'Y')
                {
                    $SMS_queuestats = 'Yes';
                }
                elseif($data['queuestats'] == 'No' || $data['queuestats'] == 'no'  || $data['queuestats'] == 'n' || $data['queuestats'] == 'N'){
                    $SMS_queuestats = 'No';
                }
                else{
                    $SMS_queuestats = null;
                }
                if($data['customerreport'] == 'Yes' || $data['customerreport'] == 'yes'  || $data['customerreport'] == 'y'  || $data['customerreport'] == 'Y')
                {
                    $SMS_customerreport = 'Yes';
                }
                elseif($data['customerreport'] == 'No' || $data['customerreport'] == 'no'  || $data['customerreport'] == 'n'  || $data['customerreport'] == 'N'){
                    $SMS_customerreport = 'No';
                }
                else{
                    $SMS_customerreport = null;
                }
                if($data['qpanel'] == 'Yes' || $data['qpanel'] == 'yes'  || $data['qpanel'] == 'y' || $data['qpanel'] == 'Y')
                {
                    $SMS_qpanel = 'Yes';
                }
                elseif($data['qpanel'] == 'No' || $data['qpanel'] == 'no'  || $data['qpanel'] == 'n' || $data['qpanel'] == 'N'){
                    $SMS_qpanel = 'No';
                }
                else{
                    $SMS_qpanel = null;
                }
                
               

                $server = Servers::firstOrNew([ 'Customer_Name'=>$data['customername']]);

                if($server->Customer_Name == ''){
                    return redirect()->route('servers.index')->with('error','Some Customer Names are null, please check again and import again after truncate');
                }
                else{
                    $server->Customer_Name = $data['customername'];
                }                

                
    
                $server->Hardware = $data['hardware'];
                

                $server->Service_Contract = $SMS_service_contract;
                $server->Comment = $data['comment'];
                $server->ISD_Allowed = $SMS_isd_allowed;
                    
                $server->Failover_IP = $data['failoverip'];
                $server->Winbox = $data['winbox'];
                $server->Secondary_IP = $data['secondaryip'];
                $server->Queue_Stats = $SMS_queuestats;
                $server->Customer_Report =  $SMS_customerreport;
                $server->Q_Panel = $SMS_qpanel;
                $server->SSH_PORT = $data['sshport'];
                $server->HTTP_PORT = $data['httpport'];
                $server->Webmin_PORT = $data['webminport'];
                $server->IP = $data['ip'];
                $server->Solution_Distro = $data['solutiondistro'];
                $server->GUI_Password = $data['guipassword'];
                $server->HTTPS_PORT = $data['httpsport'];
                $server->city_id = $city_id;
                $server->solution_location_id = $solution_location_id;
                $server->department_id = $department_id;
                $server->solution_type_id = $solution_type_id;
                $server->created_at = Carbon::now()->timestamp;
                
                $server->save();
            }           
        }
        else{
            return redirect()->route('servers.index')->with('error','Please upload a CSV file');
        }      
        
        
        return redirect()->route('servers.index')->with('success','Servers imported successfully');
    }

    public function truncate(){
        Servers::truncate();
        return redirect()->route('servers.index')->with('warning','Servers truncated successfully');
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
