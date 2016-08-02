<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Models\Course;
use App\Models\Book;
use App\Models\Category;
use App\Models\Conversation;
use App\Models\Idol;
use App\Models\Payment;
use App\Models\Profile;
use App\Models\Reply;
use App\Models\Tutorial;
use App\Models\Video;
use App\Models\Article;
use App\Models\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'profile']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = \Auth::user();
        $data['courses'] = Course::latest()->limit(4)->get();
        $data['notifications'] = \Auth::user()->notifications()->unread()->latest()->get();
        $data['skillometer'] = \Auth::user()->profile->skillometer;
        $data['page'] = 'home';
        return view('app.home', $data);
    }


    public function soon()
    {
        return view('commingsoon');
    }
}
