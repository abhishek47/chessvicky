<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Notification extends Model
{
    protected $fillable   = ['user_id', 'type', 'subject', 'body', 'object_id', 'object_type', 'sent_at'];
 
    public function getDates()
    {
        return ['created_at', 'updated_at', 'sent_at'];
    }
 
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    
    public function scopeUnread($query)
	{
	    return $query->where('is_read', '=', 0);
	}


    public function withSubject($subject)
    {
        $this->subject = $subject;
     
        return $this;
    }
 
    public function withBody($body)
    {
        $this->body = $body;
     
        return $this;
    }
     
    public function withType($type)
    {
        $this->type = $type;
     
        return $this;
    }
     
    public function regarding($link)
    {
            $this->link = $link;
        
     
        return $this;
    }

    public function deliver()
	{
	    $this->sent_at = new \Carbon\Carbon;
	    $this->save();
	 
	    return $this;
	}    


	/* NOTIFICATION SENDING CODE 

	   $user = User::find(1);
     $user->newNotification()
    ->withType('RecipeFavorited')
    ->withSubject('Your recipe has been favorited.')
    ->withBody('<User X> has favorited your Caramel Cream Cakes recipe!')
    ->regarding($recipe)
    ->deliver();

    */

}
