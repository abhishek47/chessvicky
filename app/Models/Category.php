<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'color',
    ];
  
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

     public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
