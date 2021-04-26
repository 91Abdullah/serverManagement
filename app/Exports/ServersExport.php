<?php

namespace App\Exports;

use App\Models\Servers;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class ServersExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Servers::with(['city', 'department', 'solutionLocation', 'solutionType'])->get();
    }

    public function headings(): array
    {
        return [
            'customername',
            'serverpassword',
            'hardware',
            'servicecontract',
            'comment',
            'isdallowed',
            'failoverip',
            'winbox',
            'secondaryip',
            'queuestats',
            'customerreport',
            'qpanel',
            'sshport',
            'httpport',
            'webminport',
            'ip',
            'solutiondistro',
            'guipassword',
            'httpsport',
            'city',
            'solutionlocation',
            'department',
            'solutiontype',
            'createdat'
            
        ];
    }

    public function map($server): array
    {
        return [
            $server->Customer_Name,
            $server->Server_Password,
            $server->Hardware,
            $server->Service_Contract,
            $server->Comment,
            $server->ISD_Allowed,
            $server->Failover_IP,
            $server->Winbox,
            $server->Secondary_IP,
            $server->Queue_Stats,
            $server->Customer_Report,
            $server->Q_Panel,
            $server->SSH_PORT,
            $server->HTTP_PORT,
            $server->Webmin_PORT,
            $server->IP,
            $server->Solution_Distro,
            $server->GUI_Password,
            $server->HTTPS_PORT,
            $server->city->name,       
            $server->solutionLocation->name,
            $server->solutionType->name,
            $server->department->name,
            $server->created_at,
        ];
    }
}
