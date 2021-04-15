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
        return Servers::all();
    }

    public function headings(): array
    {
        return [
            'city_id',
            'Customer_Name',
            'Server_Password',
            'solution_location_id',
            'solution_type_id',
            'department_id',
            'Hardware',
            'IP',
            'Solution_Distro',
            'Service_Contract',
            'Comment',
            'ISD_Allowed',
            'Failover_IP',
            'Winbox',
            'Secondary_IP',
            'Queue_Stats',
            'Customer_Report',
            'Q_Panel',
            'SSH_PORT',
            'HTTP_PORT',
            'Webmin_PORT',
            'created_at',
            'updated_at',
            'deleted_at'
        ];
    }

    public function map($server): array
    {
        return [
            $server->city_id,
            $server->Customer_Name,
            $server->Server_Password,
            $server->solution_location_id,
            $server->solution_type_id,
            $server->department_id,
            $server->Hardware,
            $server->IP,
            $server->Solution_Distro,
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
            $server->created_at,
            $server->updated_at,
            $server->deleted_at
        ];
    }
}
