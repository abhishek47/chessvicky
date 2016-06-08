<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $fillable = [
        'title', 'body', 'slug', 'user_id', 'tags', 'category_id'
    ];

    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

 
}
