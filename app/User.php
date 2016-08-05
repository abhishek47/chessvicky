<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Idol;

use App\Models\Like;

use App\Models\Notification;
use Nicolaslopezj\Searchable\SearchableTrait;
use App\Models\UserChallenges;

class User extends Authenticatable
{


    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'users.fname' => 1,
            'users.lname' => 1,
            'users.username' => 1,
            'users.email' => 1,
            
        ]
    ];

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
    

    public function fullname()
    {
       return $this->fname . ' ' . $this->lname;
    }

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

     public function challenges()
    {
        return $this->hasMany(Models\UserChallenges::class);
    }
    
    public function getChallengeIds()
    {
        return $this->challenges->lists('challenge_id');
    }

      public function profile()
    {
        return $this->hasOne(Models\Profile::class);
    }
    
     public function idol()
    {
        return $this->hasOne(Models\Idol::class);
    }

    public function isIdol()
    {
        if(Idol::where('user_id', $this->id)->first())
        {
            return true;
        }

        return false;
    }

    public function likes($ansId)
    {
        if(Like::where('user_id', $this->id)->where('answer_id', $ansId)->first())
        {
            return true;
        }

        return false;
    }

    // In your User model - 1 User has Many Notifications
    public function notifications()
    {
        return $this->hasMany(Models\Notification::class)->unread()->latest();
    }



    public function newNotification()
    {
        $notification = new Notification;
        $notification->user()->associate($this);

        return $notification;
    }
    

    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("fname", "LIKE","%$keyword%")
                    ->orWhere("lname", "LIKE","%$keyword%" )
                    ->orWhere("email", "LIKE", "%$keyword%")
                    ->orWhere("username", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }

}
