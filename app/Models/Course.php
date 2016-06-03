<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'desc', 'category_id', 'tags', 'slug', 'banner_url', 'trailer_url',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class)->orderBy('position');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
