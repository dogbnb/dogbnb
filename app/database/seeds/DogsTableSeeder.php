<?php


class DogsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('dogs')->delete();

        $user = User::first();

        $dog = new Dog();
        $dog->dog_name = "Sky";
        $dog->dog_size = "medium";
        $dog->user_id = 1;
        $dog->save();

        $dog = new Dog();
        $dog->dog_name = "Max";
        $dog->dog_size = "medium";
        $dog->user_id = 2;
        $dog->save();

        $dog = new Dog();
        $dog->dog_name = "Bella";
        $dog->dog_size = "small";
        $dog->user_id = 3;
        $dog->save();

        $dog = new Dog();
        $dog->dog_name = "Buddy";
        $dog->dog_size = "medium";
        $dog->user_id = 4;
        $dog->save();

        $dog = new Dog();
        $dog->dog_name = "Toby";
        $dog->dog_size = "small";
        $dog->user_id = 5;
        $dog->save();


	}

}