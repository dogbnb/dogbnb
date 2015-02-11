<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function createprofile()
	{
		return View::make('layouts.createprofile');
	}
	
	public function createreservation()
	{
		return View::make('layouts.createreservation');
	}
	public function editprofile()
	{
		return View::make('layouts.editprofile');
	}
	
	public function index()
	{
		return View::make('layouts.index');
	}

	public function showlogin()
	{
		return View::make('layouts.login');
	}

	public function doLogin(){
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		Session::flash('successMessage', "You've logged in!");
    		return Redirect::intended('/');
		} else {
	   		Session::flash('errorMessage', 'Failed to log in');
	   		// return Redirect::action(' Example : HomeController@showLogin');
		}


	public function search()
	{
		return View::make('layouts.search');
	}

	public function signup()
	{
		return View::make('layouts.signup');
	}

}
