<?php

class ReservationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reservations
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reservations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = User::with('dog')->findOrFail(Auth::id());
		// pass location id of host being reserved
		return View::make('reservations.create')->with('user', $user);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reservations
	 *
	 * @return Response
	 */
	public function store()
	{
		$reservation = new Reservation();

		$reservation->in_at = Input::get('in_at');
		$reservation->out_at = Input::get('out_at');
		// capture location id of host
		$reservation->location_id = ;
		$reservation->dog_id = $user->dog->id ;

		$reservation->save();

		Session::flash('successMessage', 'Congratulations! Your Rover Sleepover has been scheduled.');
		// send user to Reservation Confirmation view.
		return Redirect::to('/login');
	}

	/**
	 * Display the specified resource.
	 * GET /reservations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /reservations/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /reservations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /reservations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}