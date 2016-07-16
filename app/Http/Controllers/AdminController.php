<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
use App\Models\Challenge;
use App\Models\Quiz;

class AdminController extends Controller
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

    /**
     * Show the application admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['userscount'] = User::count(); // tmp
        $data['visitors'] = User::count();
       $data['onlineusers'] = count(User::where('online', 1)->get());
        $data['revenue'] = 10000;
        $data['courses'] = Course::count();
        $data['videos'] = Video::count();
        $data['page'] = 'home';
        return view('admin.index', $data);
    }

    public function users()
    {
        $users = User::paginate(15);
        $count = User::count();
        $page  = 'users';
        return view('admin.users.index', compact('users', 'page', 'count'));
    }

    public function courses()
    {
        $courses = Course::paginate(10);
        $categories = Category::count();
        $count = Course::count();
        $page  = 'courses';
        return view('admin.courses.index', compact('courses', 'page', 'categories', 'count'));
    }
   
    public function videos()
    { 

        $courses = Course::all();
        $videos = Video::paginate(10);
        $count = Video::count();
        $page  = 'videos';
        return view('admin.videos.index',compact('videos', 'page', 'count', 'courses'));
    }

    public function categories()
     { 

        $categories = Category::paginate(10);
        $count = Category::count();
        $page  = 'categories';
        return view('admin.extra.coursecategories', compact('categories', 'page', 'count'));
    }


    public function articles()
    { 

        $articles = Article::paginate(10);
        $count = Article::count();
        $page  = 'articles';
        return view('admin.articles.index', compact('articles', 'page', 'count'));
    }

    

   
    public function books()
    {
        $books = Book::paginate(10);
        $categories = Category::count();
        $count = count($books);
        $page = 'books';
        return view('admin.books.index', compact('books', 'count', 'page', 'categories'));
    }

     public function challenges()
    { 

        $challenges = Challenge::paginate(10);
        $count = Challenge::count();
        $page  = 'challenges';
        return view('admin.challenges.index', compact('challenges', 'page', 'count'));
    }
   

    public function quiz()
    {
        $data['quizzes'] = Quiz::latest()->paginate(20);
        $data['page'] = 'quiz';
        $data['count'] = Quiz::count();

        return view('admin.quiz.index', $data);
    }
    


   

  
   
}
