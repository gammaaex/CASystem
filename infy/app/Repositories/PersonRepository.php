<?php

namespace App\Repositories;

use App\Models\Person;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PersonRepository
 * @package App\Repositories
 * @version June 22, 2018, 3:02 pm UTC
 *
 * @method Person findWithoutFail($id, $columns = ['*'])
 * @method Person find($id, $columns = ['*'])
 * @method Person first($columns = ['*'])
*/
class PersonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'gender',
        'faculty_id',
        'admitted_on',
        'student_number',
        'email',
        'phone',
        'group_id',
        'role_id',
        'interest',
        'special_ability',
        'portfolio',
        'image_link',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Person::class;
    }
}
