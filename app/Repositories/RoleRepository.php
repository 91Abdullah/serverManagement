<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\View;
use Auth;

/**
 * Class RoleRepository
 * @package App\Repositories
 * @version March 30, 2021, 9:11 am UTC
*/

class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'description',
        'level'
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
       
        return Role::class;
    }
}
