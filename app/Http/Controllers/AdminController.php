<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
   

     public function __construct()
     {
          $this->middleware(['auth']);
     }

     public function index()
     {
        $data['userscount'] = User::count();

        $data['onlineusers'] = count(User::where('online', 1)->get());

      	return view('admin.index', $data);
     }
}
