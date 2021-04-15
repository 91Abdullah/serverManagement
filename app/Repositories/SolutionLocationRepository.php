<?php

namespace App\Repositories;

use App\Models\SolutionLocation;
use App\Repositories\BaseRepository;

/**
 * Class SolutionLocationRepository
 * @package App\Repositories
 * @version April 1, 2021, 6:57 am UTC
*/

class SolutionLocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return SolutionLocation::class;
    }
}
