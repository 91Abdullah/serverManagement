<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Servers;
use App\Http\Resources\ServersResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ServersController extends Controller
{
    public function index()
    {
        $servers = Servers::all();
        return response(['servers'=>ServersResource::collection($servers), 'message'=>'Retrieved Successfully'], 200);
    }

    public function store(Request $request)
    {
        $data=$request->all();

        $validator = Validator::make($data, [
            'Zone' => 'nullable|string|max:255|required',
        'Customer_Name' => 'nullable|string|max:255',
        'Password' => 'nullable|string|max:255',
        'Solution_Distro' => 'nullable|string|max:255',
        'Hardware' => 'nullable|string|max:255',
        'Service_Contract' => 'nullable|integer',
        'Comment' => 'nullable|string|max:255',
        'ISDAllowed' => 'nullable|string|max:255',
        'IP' => 'nullable|ipv4|max:255',
        'Winbox' => 'nullable|integer',
        'SecondaryIP' => 'nullable|ipv4|string|max:255',
        'FailoverIP' => 'nullable|ipv4|string|max:255',
        'Mobile_Number' => 'nullable|string|max:255',
        'Queue_stats' => 'nullable|integer',
        'Customreport' => 'nullable|integer',
        'Qpanel' => 'nullable|integer',
        'SSHPort' => 'nullable|integer',
        'HTTP_Port' => 'nullable|integer',
        'WebminPort' => 'nullable|integer',
        
        ]);

        if($validator->fails())
        {
            return response(['error'=>$validator->errors(), 'Validation Error']);
        }

        $servers = Servers::create($data);

        return response(['servers' => new ServersResource($servers), 'message' => 'Created successfully'], 201);
    }
    public function show(Servers $servers)
    {
        return response(['servers' => new ServersResource($servers), 'message' => 'Retrieved Successfully'], 200);
    }

    public function update(Request $request, Servers $servers)
    {
        $servers->update($request->all());
        return response(['servers'=> new ServersResource($servers), 'message' => 'Updated Successfully'], 200);
    }

    public function destroy(Servers $servers)
    {
        $servers->delete();

        return response(['message'  => 'Deleted']);
    }

}
