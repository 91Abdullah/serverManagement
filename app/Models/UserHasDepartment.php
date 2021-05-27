<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserHasDepartment extends Pivot
{
    use HasFactory;

    public $table = 'user_has_departments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'user_id',
        'department_id',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function departments(){
        return $this->belongsToMany(Department::class);
    }
}
