<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * App\Meeting
 *
 */
class Meeting extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_time',
        'end_time',
        'general_evaluation',
        'user_id',
        'event_id',
        'student_id',
        'general_comment',
    ];
    protected $table = 'meetings';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
