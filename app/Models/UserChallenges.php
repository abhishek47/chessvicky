<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserChallenges extends Model
{
    protected $table = "users_challenges";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'challenge_id',
    ];
}
