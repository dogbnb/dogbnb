<?php



class ReservationsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('reservations')->delete();

        $dog = Dog::first();
        $location = Location::first();

        $reservation = new Reservation();
        $reservation->in_at = "2015-04-27";
        $reservation->out_at = "2015-05-01";

        $reservation->location_id = $location->id;
        $reservation->dog_id = $dog->id;
        $reservation->save();
	}

}