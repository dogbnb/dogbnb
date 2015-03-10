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

    public function showBrowse()
    {

        $query = Location::with(['user', 'images']);

        $query->whereHas('user', function($q) {
            $q->where('role', 'host');
        });

        if (Input::has('radius')) {
            $radius = Input::get('radius');

            $query->distance(Auth::user()->location->latitude, Auth::user()->location->longitude, $radius);
            $query->orderBy('distance');
        }

        
        $locations = $query->get();
        return View::make('browse')->with('locations', $locations);
    }


	// public function showSearch()
	// {

 //        $query = Location::with(['user', 'images']);

 //        $query->whereHas('user', function($q) {
 //            $q->where('role', 'host');
 //        });

 //        if (Input::has('radius')) {
 //            $radius = Input::get('radius');

 //            $query->distance(Auth::user()->location->latitude, Auth::user()->location->longitude, $radius);
 //            $query->orderBy('distance');
 //        }

        
 //        $locations = $query->get();
 //        return View::make('search')->with('locations', $locations);
	// }


	public function doLogin(){
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		
    		Session::flash('successMessage', "You've logged in!");

    		if (Auth::user()->role == 'owner') {
                return Redirect::to('/search');

    		} elseif (Auth::user()->role == 'host') {
    			// return View::make('host-profile');
                return Redirect::to('/search');

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
