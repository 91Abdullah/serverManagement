<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Servers
 * @package App\Models
 * @version April 14, 2021, 9:46 am UTC
 *
 * @property integer $city_id
 * @property string $Customer_Name
 * @property string $Server_Password
 * @property integer $solution_location_id
 * @property integer $solution_type_id
 * @property string $Hardware
 * @property string $Service_Contract
 * @property string $Comment
 * @property string $ISD_Allowed
 * @property string $Failover_IP
 * @property string $Winbox
 * @property string $Secondary_IP
 * @property string $Queue_Stats
 * @property string $Customer_Report
 * @property string $Q_Panel
 * @property string $SSH_PORT
 * @property string $HTTP_PORT
 * @property string $Webmin_PORT
 * @property string $IP
 * @property string $Solution_Distro
 * @property integer $department_id
 */
class Servers extends Model
{
    use SoftDeletes;

    use HasFactory;
    use LogsActivity;

    public $table = 'servers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'department_id',
        'GUI_Password',
        'HTTPS_PORT'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'city_id' => 'integer',
        'Customer_Name' => 'string',
        'Server_Password' => 'string',
        'solution_location_id' => 'integer',
        'solution_type_id' => 'integer',
        'Hardware' => 'string',
        'Service_Contract' => 'string',
        'Comment' => 'string',
        'ISD_Allowed' => 'string',
        'Failover_IP' => 'string',
        'Winbox' => 'string',
        'Secondary_IP' => 'string',
        'Queue_Stats' => 'string',
        'Customer_Report' => 'string',
        'Q_Panel' => 'string',
        'SSH_PORT' => 'string',
        'HTTP_PORT' => 'string',
        'Webmin_PORT' => 'string',
        'IP' => 'string',
        'Solution_Distro' => 'string',
        'department_id' => 'integer',
        'GUI_Password' => 'string',
        'HTTPS_PORT'  => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'city_id' => 'required',
        'Customer_Name' => 'required|string|max:255',
        'Server_Password' => 'nullable|string|max:255',
        'solution_location_id' => 'required',
        'solution_type_id' => 'required',
        'Hardware' => 'nullable|string|max:255',
        'Service_Contract' => 'nullable|string',
        'Comment' => 'nullable|string|max:255',
        'ISD_Allowed' => 'nullable|string',
        'Failover_IP' => 'nullable|string|max:255',
        'Winbox' => 'nullable|string|max:255',
        'Secondary_IP' => 'nullable|string|max:255',
        'Queue_Stats' => 'nullable|string',
        'Customer_Report' => 'nullable|string',
        'Q_Panel' => 'nullable|string',
        'SSH_PORT' => 'nullable|string|max:255',
        'HTTP_PORT' => 'nullable|string|max:255',
        'Webmin_PORT' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'IP' => 'nullable|string|max:255',
        'Solution_Distro' => 'nullable|string|max:255',
        'department_id' => 'required',
        'GUI_Password' => 'nullable|string|max:255',
        'HTTPS_PORT'  =>'nullable|string|max:255'
    ];


    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function solutionLocation()
    {
        return $this->belongsTo(SolutionLocation::class);
    }
    public function solutionType()
    {
        return $this->belongsTo(SolutionType::class);
    }

    
}
