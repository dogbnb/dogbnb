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
	public function create($hostId)
	{
		$guest = User::with('dog')->findOrFail(Auth::id());
		$host  = User::findOrFail($hostId);
		// pass location id of host being reserved
		return View::make('reservations.create')->with('guest', $guest)->with('host', $host);
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

		$inAt = strtotime(Input::get('in_at'));
		$outAt = strtotime(Input::get('out_at'));

		$inAtFormatted = date('Y-m-d', $inAt);
		$outAtFormatted = date('Y-m-d', $outAt);

		$reservation->in_at = $inAtFormatted;
		$reservation->out_at = $outAtFormatted;
		$reservation->location_id = Input::get('location_id');
		$reservation->dog_id = Input::get('dog_id');

		$reservation->save();
		// send user to Reservation Confirmation view.
		return View::make('reservations.confirmation')->with('reservation', $reservation);
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