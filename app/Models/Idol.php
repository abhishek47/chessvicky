<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idol extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'desc', 'user_id', 'photo_url',
    ];

    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }
}
