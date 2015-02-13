<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', 'HomeController@index');

Route::resource('users', 'UsersController');


// Route::get('createreservation', 'HomeController@createreservation');

Route::resource('create-host', 'UsersController@createHost');

Route::get('editprofile', 'HomeController@editprofile');

Route::get('index', 'HomeController@index');

Route::get('login', 'HomeController@login');

Route::get('search', 'HomeController@search');

Route::get('signup', 'HomeController@signup');

Route::get('/upload', function(){

	return View::make('upload');
});

Route::post('/upload', 'HomeController@upload');



Route::resource('Users', 'UsersController');

Route::resource('Locations', 'LocationsController');

Route::resource('Dogs', 'DogsController');

Route::resource('Reservations', 'ReservationsController');

Route::resource('Images', 'ImagesController');
