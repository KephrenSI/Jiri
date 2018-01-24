<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * App\Project
 *
 */
class Project extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
    protected $table = 'projects';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function implementations()
    {
        return $this->hasMany(Implementation::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
