<?php

namespace App\Repositories;

use App\Models\Servers;
use App\Repositories\BaseRepository;

/**
 * Class ServersRepository
 * @package App\Repositories
 * @version April 14, 2021, 9:46 am UTC
*/

class ServersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'city_id',
        'Customer_Name',
        'Server_Password',
        'solution_location_id',
        'solution_type_id',
        'Hardware',
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
        'IP',
        'Solution_Distro',
        'department_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servers::class;
    }
}
