<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// DB::table('users')->delete();

		$this->call('UserTableSeeder');
		$this->call('DogsTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('ImagesTableSeeder');
		// $this->call('ReservationsTableSeeder');

	}

}
