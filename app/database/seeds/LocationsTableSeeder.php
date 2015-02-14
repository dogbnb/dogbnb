<?php



class LocationsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('locations')->delete();

        $user = User::first();

        $location = new Location();
        $location->street = "104 Pinecrest Blvd.";
        $location->apt = "Apt. 1";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78209";
        $location->description = NULL;
        $location->user_id = $user->id;
        $location->save();
	}

}