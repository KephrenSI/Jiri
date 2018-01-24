<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * App\Student
 *
 */
class Student extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
    ];
    protected $table = 'students';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function implementations()
    {
        return $this->hasMany(Implementation::class);
    }

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'meetings');
    }
}
