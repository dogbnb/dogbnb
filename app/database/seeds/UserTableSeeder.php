<?php

// // Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

// class TestTableSeeder extends Seeder {

//     public function run()
//     {
//         $faker = Faker::create();

//         foreach(range(1, 10) as $index)
//         {
//             Test::create([

//             ]);
//         }
//     }

// }




class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->role = "owner";
        $user->fname = "Calvin";
        $user->lname = "Glover";
        $user->phone = "2106020826";
        $user->email = "cglover.depuy@me.com";
        $user->nickname = NULL;
        $user->size_allowed = NULL;
        $user->password = $_ENV['DB_PASS'];
        $user->save();
    }
}