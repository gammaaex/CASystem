<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Role
 * @package App\Models
 * @version June 22, 2018, 3:02 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection eventAttendances
 * @property \Illuminate\Database\Eloquent\Collection lendingHistories
 * @property \Illuminate\Database\Eloquent\Collection Person
 * @property \Illuminate\Database\Eloquent\Collection questionnaireAnswers
 * @property \Illuminate\Database\Eloquent\Collection questionnaireContents
 * @property \Illuminate\Database\Eloquent\Collection usersProjects
 * @property string name
 * @property string created_by
 * @property string updated_by
 */
class Role extends Model
{

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
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
        'name' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function people()
    {
        return $this->hasMany(\App\Models\Person::class);
    }
}
