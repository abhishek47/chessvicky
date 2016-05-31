<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* LANDING PAGE */

Route::get('/', 'LandingController@index');


/* AUTHENTICATION */

Route::auth();


/************ MAIN APPLICATION *************/

// Dashboard
Route::get('/home', 'HomeController@index');


// Profile
Route::get('/profile', 'ProfileController@show');
Route::get('/test', 'ProfileController@create');
Route::post('/grade', 'ProfileController@grade');

/************* MAIN APP ROUTES END HERE *************/


/************* ADMIN PANEL ROUTES *************/

// Dashboard : 
Route::get('/admin', 'AdminController@index');
Route::get('/metrics', 'AdminController@metrics');
Route::get('/users', 'UsersController@index');

// Library :
Route::get('/admin/courses', 'AdminController@courses' );
Route::get('/admin/courses/new', 'CoursesController@create');
Route::post('/admin/courses', 'CoursesController@store');
Route::get('/admin/courses/{slug}/edit', 'CoursesController@edit');
Route::post('/admin/courses/{slug}', 'CoursesController@update');
Route::post('/admin/courses/categories', 'CoursesController@storecategories');
Route::post('/admin/courses/categories/{id}', 'CoursesController@updatecategories');

Route::get('/admin/videos', 'AdminController@videos' );
Route::get('/admin/videos/new', 'VideosController@create');
Route::post('/admin/videos', 'VideosController@store');
Route::get('/admin/videos/{slug}/edit', 'VideosController@edit');
Route::post('/admin/videos/{slug}', 'CoursesController@update');

Route::get('/admin/books', 'AdminController@books' );
Route::post('/admin/books', 'BooksController@store');
Route::get('/admin/books/{slug}/edit', 'BooksController@edit');
Route::post('/admin/books/{slug}', 'BooksController@update');
Route::post('/admin/books/categories', 'BooksController@storecategories');
Route::post('/admin/books/categories/{id}', 'BooksController@updatecategories');

Route::get('/admin/tutorials', 'AdminController@tutorials' );
Route::get('/admin/tutorials/new', 'TutorialsController@create');
Route::post('/admin/tutorials', 'TutorialsController@store');
Route::get('/admin/tutorials/{slug}/edit', 'TutorialsController@edit');
Route::post('/admin/tutorials/{slug}', 'TutorialsController@update');


// Articles :
Route::get('/admin/articles', 'AdminController@articles' );
Route::get('/admin/articles/new', 'ArticlesController@create');
Route::post('/admin/articles', 'ArticlesController@store');
Route::get('/admin/articles/{slug}/edit', 'ArticlesController@edit');
Route::post('/admin/articles/{slug}', 'ArticlesController@update');
Route::post('/admin/articles/categories', 'ArticlesController@storecategories');
Route::post('/admin/articles/categories/{id}', 'ArticlesController@updatecategories');


// Super Idols :
Route::get('/admin/superidols/conversations', 'IdolsController@conversations');
Route::get('/admin/superidols', 'IdolsController@idols');

// Forum :
Route::get('/admin/forum', 'AdminController@forum');

// Online Chess :
Route::get('/admin/games/ongoing', 'AdminController@ongoingGames');
Route::get('/admin/games/history', 'AdminController@historyGames');
Route::get('/admin/games/tournaments', 'AdminController@tournaments');
Route::get('/admin/leaderboards', 'AdminController@leaderboards');

// Quiz : 
Route::get('/admin/quiz', 'AdminController@quiz');
Route::get('/admin/quiz/new', 'QuizController@create');
Route::get('/admin/quiz/categories', 'QuizController@categories');
Route::post('/admin/quiz/categories', 'QuizController@storecategories');
Route::post('/admin/quiz/categories/{id}', 'QuizController@updatecategories');

// Challenges :
Route::get('/admin/challenges/daily', 'AdminController@dailychallenges');
Route::get('/admin/challenges/weekly', 'AdminController@weeklychallenges');
Route::get('/admin/challenges/new', 'ChallengesController@create');
Route::post('/admin/challenges/', 'ChallengesController@store');

/************ ADMIN ROUTES END HERE **********/

/* PAYMENTS */

Route::post('/ipn', 'IpnController@ipn');