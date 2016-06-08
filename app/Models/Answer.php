<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Answer extends Model
{
    protected $fillable = [
        'body', 'user_id', 'question_id',
    ];

    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }

    public function likes()
    {
    	return $this->hasMany(Like::class);
    }
}
