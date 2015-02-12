<?php


class DogsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('dogs')->delete();

        $user = User::first();

        $dog = new Dog();
        $dog->dog_name = "Sky";
        $dog->dog_size = "medium";
        $dog->user_id = $user->id;
        $dog->save();

	}

}