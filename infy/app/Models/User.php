<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Wildside\Userstamps\Userstamps;

/**
 * Class User
 * @package App\Models
 * @version June 19, 2018, 4:31 pm UTC
 *
 * @property \App\Models\Authority authority
 * @property \Illuminate\Database\Eloquent\Collection EventAttendance
 * @property \Illuminate\Database\Eloquent\Collection LendingHistory
 * @property \Illuminate\Database\Eloquent\Collection Person
 * @property \Illuminate\Database\Eloquent\Collection QuestionnaireAnswer
 * @property \Illuminate\Database\Eloquent\Collection questionnaireContents
 * @property \Illuminate\Database\Eloquent\Collection UsersProject
 * @property string email
 * @property string password
 * @property string remember_token
 * @property integer authority_id
 * @property date left_on
 * @property string comment
 * @property string created_by
 * @property string updated_by
 */
class User extends Authenticatable
{
    use Notifiable;
    use Userstamps;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'email',
        'password',
        'remember_token',
        'authority_id',
        'left_on',
        'comment',
//        'created_by',
//        'updated_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'authority_id' => 'integer',
        'left_on' => 'date',
        'comment' => 'string',
//        'created_by' => 'string',
//        'updated_by' => 'string'
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
    public function authority()
    {
        return $this->belongsTo(\App\Models\Authority::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function eventAttendances()
    {
        return $this->hasMany(\App\Models\EventAttendance::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lendingHistories()
    {
        return $this->hasMany(\App\Models\LendingHistory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function people()
    {
        return $this->hasMany(\App\Models\Person::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function questionnaireAnswers()
    {
        return $this->hasMany(\App\Models\QuestionnaireAnswer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usersProjects()
    {
        return $this->hasMany(\App\Models\UsersProject::class);
    }
}
