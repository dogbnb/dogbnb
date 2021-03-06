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

Route::get('/map', function()
{
    $locations = Location::whereHas('user', function($q) {
        $q->where('role', 'host');
    })->get();
    return View::make('map')->with('locations', $locations);
});

Route::get('/', 'HomeController@index');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('users/create-host', 'UsersController@showCreateHost');

Route::get('users/create-rover', 'UsersController@showCreateRover');

Route::get('reservations/create/{hostId}', 'ReservationsController@create');

Route::get('index', 'HomeController@index');

Route::get('search', 'HomeController@showSearch');
Route::post('search', 'HomeController@showSearch');

// Routes for Browse - test only 
Route::get('browse', 'HomeController@showBrowse');
Route::post('browse', 'HomeController@showBrowse');

Route::get('searchTest', function() {

    // $users = User::with('location.images')->where('role', '=', 'host')->get();
    // return View::make('search')->with('users', $users);

    $query = Location::with(['user', 'images']);

    $query->whereHas('user', function($q) {
        $q->where('role', 'host');
    });

    $query->distance(Auth::user()->location->latitude, Auth::user()->location->longitude, 10);
    $query->orderBy('distance');
    $locations = $query->get();
    return $locations;

    // $results = Address::distance($lat, $lng, $radius)
    //           ->orderBy("distance")
    //           ->get();

});



Route::resource('users', 'UsersController');

Route::resource('locations', 'LocationsController');

Route::resource('dogs', 'DogsController');

Route::resource('reservations', 'ReservationsController');

Route::resource('images', 'ImagesController');
