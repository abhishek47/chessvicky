<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'desc', 'category_id', 'tags', 'slug', 'cover_url', 'author', 'url'
    ];

      public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
