<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Person
 * @package App\Models
 * @version June 22, 2018, 3:02 pm UTC
 *
 * @property \App\Models\Faculty faculty
 * @property \App\Models\Group group
 * @property \App\Models\Role role
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection eventAttendances
 * @property \Illuminate\Database\Eloquent\Collection lendingHistories
 * @property \Illuminate\Database\Eloquent\Collection questionnaireAnswers
 * @property \Illuminate\Database\Eloquent\Collection questionnaireContents
 * @property \Illuminate\Database\Eloquent\Collection usersProjects
 * @property integer user_id
 * @property string last_name
 * @property string first_name
 * @property string last_name_kana
 * @property string first_name_kana
 * @property string gender
 * @property integer faculty_id
 * @property date admitted_on
 * @property integer student_number
 * @property string email
 * @property string phone
 * @property integer group_id
 * @property integer role_id
 * @property string interest
 * @property string special_ability
 * @property string portfolio
 * @property string image_link
 * @property string created_by
 * @property string updated_by
 */
class Person extends Model
{

    public $table = 'people';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'last_name' => 'string',
        'first_name' => 'string',
        'last_name_kana' => 'string',
        'first_name_kana' => 'string',
        'gender' => 'string',
        'faculty_id' => 'integer',
        'admitted_on' => 'date',
        'student_number' => 'integer',
        'email' => 'string',
        'phone' => 'string',
        'group_id' => 'integer',
        'role_id' => 'integer',
        'interest' => 'string',
        'special_ability' => 'string',
        'portfolio' => 'string',
        'image_link' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function faculty()
    {
        return $this->belongsTo(\App\Models\Faculty::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function group()
    {
        return $this->belongsTo(\App\Models\Group::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
