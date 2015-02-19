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

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('distance-finder', 'HomeController@distanceFinder');

Route::get('upload', 'HomeController@showupload');
Route::post('upload', 'UsersController@photoUpload');


Route::get('users/create-host', 'UsersController@showCreateHost');

Route::get('users/create-rover', 'UsersController@showCreateRover');

Route::get('reservations/create', 'ReservationsController@create');



Route::get('carousel', 'UsersController@carousel');



Route::get('index', 'HomeController@index');

Route::get('search', 'HomeController@showSearch');


Route::get('owner-profile', 'HomeController@showOwnerProfile');

// Route::get('host-profile', 'usersController@show');




Route::resource('users', 'UsersController');

Route::resource('locations', 'LocationsController');

Route::resource('dogs', 'DogsController');

Route::resource('reservations', 'ReservationsController');

Route::resource('images', 'ImagesController');
