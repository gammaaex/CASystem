<?php

namespace App\Repositories;

use App\Models\Authority;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AuthorityRepository
 * @package App\Repositories
 * @version June 19, 2018, 4:30 pm UTC
 *
 * @method Authority findWithoutFail($id, $columns = ['*'])
 * @method Authority find($id, $columns = ['*'])
 * @method Authority first($columns = ['*'])
*/
class AuthorityRepository extends BaseRepository
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
        return Authority::class;
    }
}
