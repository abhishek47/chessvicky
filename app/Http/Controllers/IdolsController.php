<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Idol;
use App\Models\Message;
use App\User;

class IdolsController extends Controller
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


	public function show()
	{
		$idols = Idol::paginate(10);
    	$count = count($idols);
    	$page = 'idols';
    	return view('app.idols.index', compact('idols', 'count', 'page'));
	}
    
    public function conversations($id)
    {
    	$idol = Idol::findOrFail($id);
      $messages = Message::where(function ($query) use ($idol) {
                $query->where('sender_id', \Auth::user()->id)
                      ->where('reciever_id',$idol->user_id);
            })
            ->orWhere(function ($query) use ($idol) {
                    $query->where('sender_id',$idol->user_id)
                      ->where('reciever_id', \Auth::user()->id);
            })->latest()->get();

      $page = 'idols';
    	return view('app.idols.conversations', compact('idol', 'messages', 'page'));
    }

    public function idolConversations()
    {
       if(!(\Auth::user()->isIdol()))
       {
          return back();
       }
       
       $messages = Message::where('reciever_id', \Auth::user()->id )
                           ->orWhere('sender_id', \Auth::user()->id)->get();

       $page = 'idols';
       
       return view('app.idols.idolconversations', compact('messages', 'page'));                    

    }

    public function idols()
    {
    	$idols = Idol::paginate(10);
    	$count = count($idols);
    	$page = 'idols';
    	return view('admin.idols.idols', compact('idols', 'count', 'page'));
    }


    public function store(Request $request)
    {
         
         $this->validate($request, [
              'name' => 'required',
              'photo_url' => 'required',
              'username' => 'required',
              'desc' => 'required',
         	]);
            

        $data = $request->all();
        
        $user = User::where('username', $data['username'])->first();

        if($user)
        {
        	$data['user_id'] = $user->id;
        } else {
            return back();
        }   

        Idol::create($data);
        
        return redirect('/admin/superidols');

    }

    public function edit($id)
    {
    	$idol = Idol::findOrFail($id);

    	return view('admin.idols.edit', compact('idol'));

    }

      public function update(Request $request, $id)
    {

         $this->validate($request, [
              'name' => 'required',
              'photo_url' => 'required',
              'desc' => 'required',
         	]);
        
        $data = $request->all();

        $idol = Idol::findOrFail($id);
        
        $idol->update($data); 


    	return redirect('/admin/superidols');

    }

    public function delete($id)
    {
    	$idol = Idol::findOrFail($id);

    	$idol->delete();

    	return redirect('/admin/superidols');
    }
}
