<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Project
 * @package App\Models
 * @version March 17, 2021, 11:01 am UTC
 *
 * @property string $project_name
 * @property string $project_description
 */
class Project extends Model
{
    use SoftDeletes;

    use HasFactory;
    use LogsActivity;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'project_name',
        'project_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_name' => 'string',
        'project_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
