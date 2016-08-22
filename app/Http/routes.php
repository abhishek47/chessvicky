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
Route::get('/subscribe', 'LandingController@subscribe');

Route::get('/soon', 'HomeController@soon');


/* AUTHENTICATION */

Route::auth();


/************ MAIN APPLICATION *************/

// Dashboard
Route::get('/home', 'HomeController@index');
Route::post('/users/all' , 'UsersController@getAllUsers');


// SUPER IDOLS :
Route::get('/superidols', 'IdolsController@show');
Route::get('/superidols/{id}', 'IdolsController@conversations');

// COURSES :
Route::get('/courses', 'CoursesController@list');
Route::get('/courses/{slug}', 'CoursesController@show');
Route::get('/courses/{cslug}/{vslug}', 'VideosController@show');

Route::get('/books', 'BooksController@list');
Route::get('/books/{slug}', 'BooksController@show');

Route::get('/articles', 'ArticlesController@list');
Route::get('/articles/type:{type}', 'ArticlesController@listbytype');
Route::get('/articles/premium', 'ArticlesController@listpremium');
Route::get('/articles/trending', 'ArticlesController@listtrending');
Route::get('/articles/{slug}', 'ArticlesController@show');

Route::get('/videos', 'VideosController@list');
Route::get('/videos/{slug}', 'VideosController@showsingle');


Route::get('/favourites', 'FavouritesController@index');
Route::get('/favourites/{type}/{id}', 'FavouritesController@store');

// Profile
Route::get('/profile', 'ProfileController@show');
Route::get('/test', 'ProfileController@create');
Route::post('/grade', 'ProfileController@grade');

Route::post('/idols/messages', 'MessagesController@store');
Route::get('/conversations', 'IdolsController@idolConversations');

Route::get('/forum', 'ForumController@index');
Route::get('/forum/{username}', 'ForumController@listByUser');
Route::post('forum/answer/like', 'AnswersController@like');

Route::post('/questions', 'QuestionsController@store');
Route::get('/questions/{id}/answered/{ansid}', 'QuestionsController@answered');
Route::get('/questions/{slug}' , 'QuestionsController@show');
Route::get('/questions/{id}/unmark', 'QuestionsController@unmark');
Route::post('/questions/{id}/answers', 'AnswersController@store');

Route::get('/challenges', 'ChallengesController@list');
Route::get('/challenges/type:{type}', 'ChallengesController@listPremium');
Route::post('/challenges/{slug}', 'ChallengesController@check');
Route::post('/userchallenges/store', 'UserChallengesController@store');


Route::get('/quiz', 'QuizController@list');
Route::get('/quiz/level:{level}/cat:{cat}', 'QuizController@list');
Route::get('/quiz/{slug}', 'QuizController@show');
Route::post('/quiz/{slug}', 'QuizController@check');




Route::get('/game', 'GamesController@index');
Route::get('/live', 'GamesController@live');
Route::get('/enginegame', 'GamesController@engine');


Route::get('/leaderboard', 'LeaderboardController@index');
Route::post('user/game/stats', 'GamesController@stats');

Route::get('/findusers', 'SearchController@findusers');

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
Route::get('/admin/courses/{slug}', 'CoursesController@showadmin');
Route::get('/admin/courses/{slug}/edit', 'CoursesController@edit');
Route::post('/admin/courses/{slug}', 'CoursesController@update');
Route::get('/admin/courses/{slug}/delete', 'CoursesController@delete');

Route::get('/admin/categories', 'AdminController@categories');
Route::post('/admin/categories', 'CategoriesController@store');
Route::post('/admin/categories/{id}', 'CategoriesController@update');
Route::get('/admin/categories/{id}/delete', 'CategoriesController@delete');

Route::get('/admin/videos', 'AdminController@videos' );
Route::get('/admin/videos/new', 'VideosController@create');
Route::post('/admin/videos', 'VideosController@store');
Route::get('/admin/videos/{slug}', 'VideosController@showadmin');
Route::get('/admin/videos/{slug}/edit', 'VideosController@edit');
Route::post('/admin/videos/{slug}', 'VideosController@update');
Route::get('/admin/videos/{slug}/delete', 'VideosController@delete');

Route::get('/admin/books', 'AdminController@books' );
Route::get('/admin/books/new','BooksController@create');
Route::post('/admin/books', 'BooksController@store');
Route::get('/admin/books/{slug}', 'BooksController@showadmin');
Route::get('/admin/books/{slug}/edit', 'BooksController@edit');
Route::post('/admin/books/{slug}', 'BooksController@update');
Route::get('/admin/books/{slug}/delete', 'BooksController@delete');

Route::get('/admin/tutorials', 'AdminController@tutorials' );
Route::get('/admin/tutorials/new', 'TutorialsController@create');
Route::post('/admin/tutorials', 'TutorialsController@store');
Route::get('/admin/tutorials/{slug}/edit', 'TutorialsController@edit');
Route::post('/admin/tutorials/{slug}', 'TutorialsController@update');


// Articles :
Route::get('/admin/articles', 'AdminController@articles' );
Route::get('/admin/articles/new', 'ArticlesController@create');
Route::post('/admin/articles', 'ArticlesController@store');
Route::get('/admin/articles/{slug}', 'ArticlesController@showadmin');
Route::get('/admin/articles/{slug}/edit', 'ArticlesController@edit');
Route::post('/admin/articles/{slug}', 'ArticlesController@update');
Route::get('/admin/articles/{slug}/delete', 'ArticlesController@delete');


// Super Idols :
Route::get('/admin/superidols/conversations', 'IdolsController@conversations');
Route::get('/admin/superidols', 'IdolsController@idols');
Route::post('/admin/superidols/store', 'IdolsController@store');
Route::get('/admin/superidols/{id}/edit', 'IdolsController@edit');
Route::post('/admin/superidols/{id}/update', 'IdolsController@update');
Route::get('/admin/superidols/{id}/delete', 'IdolsController@delete');

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
Route::post('/admin/quiz', 'QuizController@store');
Route::post('/admin/quiz/{slug}/questions', 'QuizController@storeQuestion');
Route::post('/admin/quiz/{slug}/{id}', 'QuizController@updateQuestion');
Route::get('/admin/quiz/{slug}/{id}/delete', 'QuizController@deleteQuestion');
Route::get('/admin/quiz/{slug}', 'QuizController@showadmin');
Route::get('/admin/quiz/{slug}/edit', 'QuizController@edit');
Route::post('/admin/quiz/{slug}/update', 'QuizController@update');
Route::get('/admin/quiz/{slug}/delete', 'QuizController@edit');

// Challenges :
Route::get('/admin/challenges', 'AdminController@challenges');
Route::get('/admin/challenges/new', 'ChallengesController@create');
Route::get('/admin/challenges/{slug}/edit', 'ChallengesController@edit');
Route::post('/admin/challenges/{slug}', 'ChallengesController@update');
Route::post('/admin/challenges', 'ChallengesController@store');
Route::get('/admin/challenges/{slug}/delete', 'ChallengesController@delete');

Route::post('admin/notify/', 'AdminController@sendNotification');

Route::get('/profile/{username}', 'ProfileController@show');
Route::post('/profile/update', 'ProfileController@update');
Route::post('/profile/update/password', 'ProfileController@updatePassword');


/************ ADMIN ROUTES END HERE **********/







/* PAYMENTS */

Route::post('/ipn', 'IpnController@ipn');