<?php

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
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "owner";
        $user->fname = "Tatiana";
        $user->lname = "Carpino";
        $user->phone = "2109924438";
        $user->email = "TatianaECarpino@teleworm.us";
        $user->nickname = NULL;
        $user->size_allowed = NULL;
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "owner";
        $user->fname = "Pedro";
        $user->lname = "Goodman";
        $user->phone = "2106964670";
        $user->email = "PedroMGoodman@armyspy.com";
        $user->nickname = NULL;
        $user->size_allowed = NULL;
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "owner";
        $user->fname = "George";
        $user->lname = "Fong";
        $user->phone = "2103727752";
        $user->email = "GeorgeBFong@teleworm.us";
        $user->nickname = NULL;
        $user->size_allowed = NULL;
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "owner";
        $user->fname = "Marion";
        $user->lname = "Aker";
        $user->phone = "2102232321";
        $user->email = "MarionGaker@rhyta.com";
        $user->nickname = NULL;
        $user->size_allowed = NULL;
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "host";
        $user->fname = "Eric";
        $user->lname = "Jones";
        $user->phone = "2105555555";
        $user->email = "EricLJones@jourrapide.com";
        $user->nickname = "The Dog Haus";
        $user->size_allowed = "Large";
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "host";
        $user->fname = "Thomas";
        $user->lname = "Hutchinson";
        $user->phone = "2105555555";
        $user->email = "ThomasKHutchinson@dayrep.com";
        $user->nickname = "No Cages Allowed!";
        $user->size_allowed = "Medium";
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "host";
        $user->fname = "Heather";
        $user->lname = "Brummit";
        $user->phone = "2105555555";
        $user->email = "HeatherGBrummitt@jourrapride.com";
        $user->nickname = "All Dogs Welcome!";
        $user->size_allowed = "Medium";
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "host";
        $user->fname = "Jarrod";
        $user->lname = "Howe";
        $user->phone = "2105555555";
        $user->email = "JarrodEhowe@armyspy.com";
        $user->nickname = "Jarrod's Pooch Playpen";
        $user->size_allowed = "Large";
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "host";
        $user->fname = "Deirdre";
        $user->lname = "Webb";
        $user->phone = "2105555555";
        $user->email = "DeirdeMWebb@gmail.com";
        $user->nickname = "Camp Minnie";
        $user->size_allowed = "Large";
        $user->password = "password";
        $user->save();

        $user = new User();
        $user->role = "host";
        $user->fname = "Lonnie";
        $user->lname = "Chisholm";
        $user->phone = "210555555";
        $user->email = "LonnieJchisholm@gmail.com";
        $user->nickname = "TLC For Your Aging Best Friend";
        $user->size_allowed = "Large";
        $user->password = "password";
        $user->save();

        // $user = new User();
        // $user->role = "host";
        // $user->fname = "Jeff";
        // $user->lname = "Lebowski";
        // $user->phone = "2105555555";
        // $user->email = "elduderino@letsgobowling.com";
        // $user->nickname = "The Dude's Dog Den";
        // $user->size_allowed = "large";
        // $user->password = "password";
        // $user->save();

        // $user = new User();
        // $user->role = "host";
        // $user->fname = "Walter";
        // $user->lname = "Sobchak";
        // $user->phone = "2105555555";
        // $user->email = "wsobchak@gmail.com";
        // $user->nickname = "Let Me Take Your Dog Bowling!";
        // $user->size_allowed = "small";
        // $user->password = "password";
        // $user->save();

        // $user = new User();
        // $user->role = "host";
        // $user->fname = "Donny";
        // $user->lname = "Kerabatsos";
        // $user->phone = "2105555555";
        // $user->email = "donny@wholovesbowling.com";
        // $user->nickname = "I Love Dogs, And Bowling";
        // $user->size_allowed = "Medium";
        // $user->password = "password";
        // $user->save();


    }
}