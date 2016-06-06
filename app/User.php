<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Idol;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname' ,'email', 'password', 'username', 'birthday', 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function subscription()
    {
             return Payment::where('user_id', '=', Auth::user()->id)
                ->where('expires', '>', date('Y-m-d H:i:s', time()))
                ->first(array('subscription', 'expires', 'paypal_id', 'txn_id'));
    }

    public function articles()
    {
        return $this->hasMany(Models\Article::class);
    }

 /*   public function reports()
    {
        return $this->hasMany(Models\Report::class);
    }
    */
    
    public function favourites()
    {
        return $this->hasMany(Models\Favourite::class);
    }

    public function isIdol()
    {
        if(Idol::where('user_id', $this->id)->first())
        {
            return true;
        }

        return false;
    }
}
