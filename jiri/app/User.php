<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 *
 * App\User
 *
 */
class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'company',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $table = 'users';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'meetings');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'user_id');
    }
}
