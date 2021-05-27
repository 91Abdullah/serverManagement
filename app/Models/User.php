<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Models\Activity;



/**
 * Class User
 * @package App\Models
 * @version March 30, 2021, 6:59 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class User extends Authenticatable
{
    use SoftDeletes;

    use HasFactory;

    use HasRoles;

    use LogsActivity;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable|string|max:255'
    ];

    // public function RoleUser()
    // {
    //     return $this->hasMany('App\Models\RoleToUser', 'user_id');
    // }
    public function servers()
    {
        return $this->hasMany(Servers::class, 'created_by');
    }
    public function secservers()
    {
        return $this->hasMany(Servers::class, 'update_by');
    }
    
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'user_has_departments', 'user_id', 'department_id')->withTimestamps();
    }


    
    
}
