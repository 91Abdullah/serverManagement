<?php

namespace App\Repositories;

use App\Models\RoleToUser;
use App\Repositories\BaseRepository;


/**
 * Class RoleToUserRepository
 * @package App\Repositories
 * @version March 30, 2021, 9:22 am UTC
*/

class RoleToUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'role_id',
        'user_id'
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
        return RoleToUser::class;
    }
}
