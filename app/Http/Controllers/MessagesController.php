<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Message;
use App\Models\Idol;


class MessagesController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
         $message = new Message;

         $message->sender_id = \Auth::user()->id;

         $message->reciever_id = $request->get('reciever_id');

         $message->message = $request->get('message');

         $idol = Idol::where('user_id', \Auth::user()->id)->first();

         if($idol)
         {
         	$message->is_idol = 1;
         }

         $message->save();

         return back();
    }
}
