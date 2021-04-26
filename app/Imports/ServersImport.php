<?php

namespace App\Imports;

use App\Models\Servers;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;



class ServersImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    // public function model(array $row)
    // {
    //     return new Servers([
    //     'Zone'=>$row[0], 
    //     'Customer_Name'=>$row[1],
    //     'Password'=>Hash::make($row[2]),
    //     'Solution_Distro'=>$row[3],
    //     'Hardware'=>$row[4],
    //     'Service_Contract'=>$row[5],
    //     'Comment'=>$row[6],
    //     'ISDAllowed'=>$row[7],
    //     'IP'=>$row[8],
    //     'Winbox'=>$row[9],
    //     'SecondaryIP'=>$row[10],
    //     'FailoverIP'=>$row[11],
    //     'Mobile_Number'=>$row[12],
    //     'Queue_stats'=>$row[13],
    //     'Customreport'=>$row[14],
    //     'Qpanel'=>$row[15],
    //     'SSHPort'=>$row[16],
    //     'HTTP_Port'=>$row[17],
    //     'WebminPort'=>$row[18]
    //     ]);
    // }

    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $value) {
            if ($key > 0) {
                DB::table('servers')->insert([
                    'city_id'                         => $value[0],
                    'Customer_Name'                => $value[1],
                    'Server_Password'                     => $value[2],
                    'solution_location_id'              => $value[3],
                    'solution_type_id'                     => $value[4],

                    'department_id' => $value[5],
                    'Hardware'             => $value[6],
                    'IP'                      => $value[7],
                    'Solution_Distro'                   => $value[8],
                    'Service_Contract'                           => $value[9],
                    'Comment'                       => $value[10],
                    'ISD_Allowed'                  => $value[11],
                    'Failover_IP'                   => $value[12],
                    'Winbox'                => $value[13],
                    'Secondary_IP'                  => $value[14],
                    'Queue_Stats'                 => $value[15],
                    'Customer_Report'                       => $value[16],
                    'Q_Panel'                       => $value[17],
                    'SSH_Port'                      => $value[18],
                    'HTTP_Port'                    => $value[19],
                    'Webmin_Port'                   => $value[20],
                    'created_at'            =>$value[21],
                    'updated_at'            =>$value[22],
                    'deleted_at'            =>$value[23]
                ]);
            }
        }
    }
}