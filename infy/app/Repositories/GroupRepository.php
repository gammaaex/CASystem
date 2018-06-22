<?php

namespace App\Repositories;

use App\Models\Group;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GroupRepository
 * @package App\Repositories
 * @version June 22, 2018, 3:00 pm UTC
 *
 * @method Group findWithoutFail($id, $columns = ['*'])
 * @method Group find($id, $columns = ['*'])
 * @method Group first($columns = ['*'])
*/
class GroupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'about',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Group::class;
    }
}
