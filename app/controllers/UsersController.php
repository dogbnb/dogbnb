<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function carousel()
	{
		return View::make('carousel');
	}

	public function index()
	{
		$users = User::all();

		return View::make('users.search', compact('users'));
		// return View::make('users.browse')->with('users', $users);

	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function showCreateHost()
	{
		return View::make('users.create-host');
	}

	public function showCreateRover()
	{
		return View::make('users.create-rover');
	}

	public function showCreateReservation()
	{
		return View::make('users.create-rsv');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validator = Validator::make($data = Input::all(), User::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		$user = new User();

		$role = Input::get('role');
		$user->role = $role;
		$user->password = Input::get('password');

		$user->fname = Input::get('fname');
		$user->lname = Input::get('lname');
		$user->phone = Input::get('phone');
		$user->email = Input::get('email');
		$user->nickname = Input::get('nickname');
		$user->size_allowed = Input::get('size-allowed');
		$user->save();


		$location = new Location();

		$location->street_number = Input::get('street_number');
		$location->street_name = Input::get('street_name');
		$location->city = Input::get('city');
		$location->state = Input::get('state');
		$location->zip = Input::get('zip');
		$location->country = Input::get('country');
		$location->latitude = Input::get('latitude');
		$location->longitude = Input::get('longitude');
		$location->description = Input::get('description');
		$location->user_id = $user->id;
		$location->save();

		// Handles Image Uploads
		if (Input::hasFile('images')) {

			$imageArray = Input::file('images');
			foreach($imageArray as $image) {
			  // validating each file.
			  // $rules = array('file' => 'required'); //'required|mimes:png,jpeg'
			  // $validator = Validator::make(array('file'=> $file), $rules);
			  // if($validator->passes()){
				    // path is root/uploads
				    $destinationPath = 'uploads';
				    $filename = $image->getClientOriginalName();
				    $upload_success = $image->move($destinationPath, $filename);

				    $image = new Image();
				    $image->img_name = 'uploads/' . $filename;
				    $image->location_id = $location->id;
				    $image->save();
				//}
			}
		}
		
		$dog = new Dog();

		$dog->dog_name = Input::get('dog-name');
		$dog->dog_size = Input::get('dog-size');
		$dog->user_id = $user->id;
		$dog->save();

		Session::flash('successMessage', 'Your profile has been successfully created. Please login.');
		return Redirect::to('/login');
		
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$user = User::findOrFail($id);
		$user = User::with('location', 'location.images')->find($id);
		return View::make('users.host-profile')->with('user', $user);
	}

		

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function edit($id)
	// {
	// 	$user = User::find($id);

	// 	return View::make('users.edit', compact('user'));
	// }

	// public function editRover($id)
	// {
	// 	$user = User::findOrFail($id);
	// 	return View::make('users.edit-rover')->with('user', $user);
	// }

	// /**
	//  * Update the specified user in storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	public function update($id)
	{
		$user = User::findOrFail($id);
		// return $this->



		// $validator = Validator::make($data = Input::all(), User::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// $user->update($data);

		// return Redirect::route('users.index');
	}

	// /**
	//  * Remove the specified user from storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

}
