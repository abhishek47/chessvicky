<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'desc', 'course_id', 'tags', 'slug', 'poster_url', 'url', 'position'
    ];

   

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
