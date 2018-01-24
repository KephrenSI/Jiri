<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * App\Implementation
 *
 */
class Implementation extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'student_id',
        'project_id',
        'url_repo',
        'url_project',
    ];
    protected $table = 'implementations';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
