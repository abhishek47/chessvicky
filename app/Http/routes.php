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


/* MAIN APPLICATION */

// Dashboard
Route::get('/home', 'HomeController@index');


// Profile
Route::get('/profile', 'ProfileController@show');
Route::get('/test', 'ProfileController@create');
Route::post('/grade', 'ProfileController@grade');



/* ADMIN PANEL */
Route::get('/admin', 'AdminController@index');

