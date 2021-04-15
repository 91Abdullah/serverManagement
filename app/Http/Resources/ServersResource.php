<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'city_id' => $this->city_id,
            'Customer_Name' => $this->Customer_Name,
            'Server_Password' => $this->Server_Password,
            'solution_location_id' => $this->solution_location_id,
            'solution_type_id' => $this->solution_type_id,
            'Hardware' => $this->Hardware,
            'Service_Contract' => $this->Service_Contract,
            'Comment' => $this->Comment,
            'ISD_Allowed' => $this->ISD_Allowed,
            'Failover_IP' => $this->Failover_IP,
            'Winbox' => $this->Winbox,
            'Secondary_IP' => $this->Secondary_IP,
            'Queue_Stats' => $this->Queue_Stats,
            'Customer_Report' => $this->Customer_Report,
            'Q_Panel' => $this->Q_Panel,
            'SSH_PORT' => $this->SSH_PORT,
            'HTTP_PORT' => $this->HTTP_PORT,
            'Webmin_PORT' => $this->Webmin_PORT,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'IP' => $this->IP,
            'Solution_Distro' => $this->Solution_Distro,
            'department_id' => $this->department_id
        ];
    }
}
