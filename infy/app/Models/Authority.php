<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Authority
 * @package App\Models
 * @version June 19, 2018, 4:30 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection eventAttendances
 * @property \Illuminate\Database\Eloquent\Collection lendingHistories
 * @property \Illuminate\Database\Eloquent\Collection questionnaireAnswers
 * @property \Illuminate\Database\Eloquent\Collection questionnaireContents
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property \Illuminate\Database\Eloquent\Collection usersProjects
 * @property string name
 * @property string created_by
 * @property string updated_by
 */
class Authority extends Model
{

    public $table = 'authorities';
    
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
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
