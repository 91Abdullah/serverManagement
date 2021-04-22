<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;




/**
 * Class Role
 * @package App\Models
 * @version March 30, 2021, 9:11 am UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property integer $level
 */
class Role extends Model
{
    use SoftDeletes;

    use HasFactory;
    use LogsActivity;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'description',
        'level'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'level' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'slug' => 'required|string|max:191',
        'description' => 'nullable|string|max:191',
        'level' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function RoleUser()
    {
        return $this->hasMany('App\Models\RoleToUser', 'role_id');
    }

   

    
}
