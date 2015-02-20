<?php

class HomeController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	
	public function index()
	{
		return View::make('index');
	}

	public function showlogin()
	{
		return View::make('login');
	}

	// public function showSearch()
	// {
	// 	$users = User::with('location.images')->where('role', '=', 'host')->get();
	// 	return View::make('search')->with('users', $users);
	// }

	public function showSearch()
	{
        $query = Location::with(['user', 'images']);

        $query->whereHas('user', function($q) {
            $q->where('role', 'host');
        });
        if (Input::has('search')) {
            $radius = Input::get('radius');

            $query->distance(Auth::user()->location->latitude, Auth::user()->location->longitude, $radius);
            $query->orderBy('distance');
        }      
        
        $locations = $query->paginate(3);
        return View::make('search')->with('locations', $locations);
	}

	public function showOwnerProfile()
	{
		return View::make('owner-profile');
	}

	public function showHostProfile()
	{
		return View::make('host-profile');
	}

	public function distanceFinder()
	{
		return View::make('distance-finder');
	}



	public function doLogin(){
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		
    		Session::flash('successMessage', "You've logged in!");

    		if (Auth::user()->role == 'owner') {
    			// return Redirect::intended('owner-profile.blade.php');
    			return View::make('owner-profile');

    		} elseif (Auth::user()->role == 'host') {
    			// return Redirect::intended('host-profile.blade.php');
    			return View::make('host-profile');

    		}

		} else {
	   		Session::flash('errorMessage', 'Failed to log in');
	   		return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();

		Session::flash('successMessage', 'Successfully logged out!');

		return Redirect::action('HomeController@index');
	}

}
