<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    
     
 	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'points', 'option_a', 'option_b', 'option_c', 'option_d', 'answer', 'quiz_id', 'position'
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quiz_questions';

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }   
}
