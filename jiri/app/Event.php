<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * App\Event
 *
 */
class Event extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_name',
        'academic_year',
        'exam_session',
        'user_id',
    ];
    protected $table = 'events';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function implementations()
    {
        return $this->hasMany(Implementation::class, 'event_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'implementations')->distinct('project_id');
    }

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'meetings')->distinct('student_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'meetings')->distinct('user_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
