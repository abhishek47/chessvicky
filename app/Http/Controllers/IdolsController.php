<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Idol;
use App\User;

class IdolsController extends Controller
{ 


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
    	return view('app.idols.conversations', compact('idol'));
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
