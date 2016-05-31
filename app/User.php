<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
}
