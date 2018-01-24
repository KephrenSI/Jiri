<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * App\Score
 *
 */
class Score extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score',
        'comment',
        'meeting_id',
        'implementation_id',
    ];
    protected $table = 'scores';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }

    public function implementation()
    {
        return $this->belongsTo(Implementation::class);
    }
}
