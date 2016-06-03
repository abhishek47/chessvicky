<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'body', 'slug', 'user_id', 'tags', 'is_premium',
    ];

    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }

     
}
