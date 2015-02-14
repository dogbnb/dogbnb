<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
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
		$user->email = Input::get('email');
		$user->save();

		// $location = new Location();
		// ...


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

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	// /**
	//  * Update the specified user in storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('users.index');
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
