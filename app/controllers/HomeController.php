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
		return View::make('createprofile');
	}
	
	public function createreservation()
	{
		return View::make('createreservation');
	}
	public function editprofile()
	{
		return View::make('editprofile');
	}
	
	public function index()
	{
		return View::make('index');
	}

	public function showlogin()
	{
		return View::make('login');
	}

	// public function doLogin(){
	// 	$email = Input::get('email');
	// 	$password = Input::get('password');

	// 	if (Auth::attempt(array('email' => $email, 'password' => $password))) {
 //    		Session::flash('successMessage', "You've logged in!");
 //    		// need to change..... return Redirect::intended('/');
	// 	} else {
	//    		Session::flash('errorMessage', 'Failed to log in');
	//    		// return Redirect::action(' HomeController@showLogin');
	// 	}

	public function upload(){
	    
		
	// getting all of the post data
	$files = Input::file('images');
	foreach($files as $file) {
	  // validating each file.
	  $rules = array('file' => 'required'); //'required|mimes:png,jpeg'
	  $validator = Validator::make(array('file'=> $file), $rules);
	  if($validator->passes()){
	    // path is root/uploads
	    $destinationPath = 'uploads';
	    $filename = $file->getClientOriginalName();
	    $upload_success = $file->move($destinationPath, $filename);
	    // flash message to show success.
	    Session::flash('successMessage', 'Upload successfully'); 
	    return Redirect::to('upload');
	  } 
	  else {
	    // redirect back with errors.
	    return Redirect::to('upload')->withInput()->withErrors($validator);
	  }
	}
	}

	public function search()
	{
		return View::make('search');
	}

	public function signup()
	{
		return View::make('signup');
	}

}
