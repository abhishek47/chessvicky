<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Quiz extends Model
{
    
 	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'level', 'category', 'is_premium',
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quizzes';

    public function questions()
    {
    	return $this->hasMany(QuizQuestion::class)->orderBy('position');
    }
}
