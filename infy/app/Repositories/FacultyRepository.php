<?php

namespace App\Repositories;

use App\Models\Faculty;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FacultyRepository
 * @package App\Repositories
 * @version June 22, 2018, 3:01 pm UTC
 *
 * @method Faculty findWithoutFail($id, $columns = ['*'])
 * @method Faculty find($id, $columns = ['*'])
 * @method Faculty first($columns = ['*'])
*/
class FacultyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Faculty::class;
    }
}
