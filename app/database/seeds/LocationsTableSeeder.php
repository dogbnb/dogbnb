<?php



class LocationsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('locations')->delete();

        $user = User::first();

        $location = new Location();
        $location->street_number = "1320";
        $location->street_name = "N Flores St";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78212";
        $location->country = "United States";
        $location->latitude = 29.438484;
        $location->longitude = -98.50289;
        $location->description = "We're conveniently located in central San Antonio in the quiet enclave of Olmos Park. We have a huge fenced in yard that is just perfect for running, playing, and chasing squirrels! I work from a home office and provide on-site supervision.";
        $location->user_id = 6;
        $location->save();

        $location = new Location();
        $location->street_number = "22094";
        $location->street_name = "Pelican Edge";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78258";
        $location->country = "United States";
        $location->latitude = 29.636266;
        $location->longitude = -98.476561;
        $location->description = "Don't put your dog in a kennel, leave him with us instead! We have a fenced yard for playing and live on a greenbelt that is perfect for long walks. Your dog can play all day and snooze the night away on a comfy dog bed. That's better than a cage anyday!";
        $location->user_id = 7;
        $location->save();

        $location = new Location();
        $location->street_number = "17251";
        $location->street_name = "Clovis";
        $location->city = "Helotes";
        $location->state = "TX";
        $location->zip = "78023";
        $location->country = "United States";
        $location->latitude = 29.604353;
        $location->longitude = -98.737847;
        $location->description = "We treat our guest dogs like they were our own. We provide a safe and secure environment and shower our part-time pooches with tons of love! Dogs are always supervised in our fenced and secure back yard and in the home as well. We do everything we can to provide a wonderful experience for our guests and peace of mind for their people.";
        $location->user_id = 8;
        $location->save();

        $location = new Location();
        $location->street_number = "314";
        $location->street_name = "St Charles";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78202";
        $location->country = "United States";
        $location->latitude = 29.429672;
        $location->longitude = -98.463774;
        $location->description = "I'm a downtown dog lover who would love to help take care of your downtown dog! I'm retired and have plenty of time to walk, play, and care for your dog for a day, a week, or longer.";
        $location->user_id = 9;
        $location->save();

        $location = new Location();
        $location->street_number = "9536";
        $location->street_name = "Espada Rd";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78214";
        $location->country = "United States";
        $location->latitude = 29.324245;
        $location->longitude = -98.459218;
        $location->description = "My husband and I are big time dog people! We have a 5 year old lab named Minnie who loves people and dogs of all kinds. I work from home and am never away for more than 2-3 hours during the day. We have a big fenced in yard that is perfect for running around. We also live near Hardberger dog park and love to go there with Minnie. We promise that your dog will have a fun and safe experience with us!";
        $location->user_id = 10;
        $location->save();

        $location = new Location();
        $location->street_number = "367";
        $location->street_name = "Corliss Ave";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78220";
        $location->country = "United States";
        $location->latitude = 29.414936;
        $location->longitude = -98.430814;
        $location->description = "We specialize in caring for the elderly or disabled dog. Your best friend will be taken care of just as he would in your home. Single story home with no stairs. We are experienced in giving medication as prescribed to keep your dog safe and healthy. Don't let an aging dog keep you at home. Let us care for him.";
        $location->user_id = 11;
        $location->save();

        // $location = new Location();
        // $location->street_number = "506";
        // $location->street_name = "Bluffwood Dr";
        // $location->city = "San Antonio";
        // $location->state = "TX";
        // $location->zip = "78216";
        // $location->country = "United States";
        // $location->latitude = 29.572655;
        // $location->longitude = -98.497829;
        // $location->description = "I can visit and walk pets during the day while their family is not home! I can also care for your pets while you are out of town. I am a stay at home mom with a very flexible schedule that allows me to work with your schedule. I know that my three dogs do MUCH better when in their own home when our family is out of town. They are rescue dogs and I do not want to traumatize them by putting them back in a shelter. Many other pet owners feel the same way, so I will travel to your home to feed, water, play with, reassure your fur babies while you are gone.";
        // $location->user_id = 12;
        // $location->save();

        // $location = new Location();
        // $location->street_number = "367";
        // $location->street_name = "Corliss Ave";
        // $location->city = "San Antonio";
        // $location->state = "TX";
        // $location->zip = "78220";
        // $location->country = "United States";
        // $location->latitude = 29.414936;
        // $location->longitude = -98.430814;
        // $location->description = "I can visit and walk pets during the day while their family is not home! I can also care for your pets while you are out of town. I am a stay at home mom with a very flexible schedule that allows me to work with your schedule. I know that my three dogs do MUCH better when in their own home when our family is out of town. They are rescue dogs and I do not want to traumatize them by putting them back in a shelter. Many other pet owners feel the same way, so I will travel to your home to feed, water, play with, reassure your fur babies while you are gone.";
        // $location->user_id = 13;
        // $location->save();

        // $location = new Location();
        // $location->street_number = "367";
        // $location->street_name = "Corliss Ave";
        // $location->city = "San Antonio";
        // $location->state = "TX";
        // $location->zip = "78220";
        // $location->country = "United States";
        // $location->latitude = 29.414936;
        // $location->longitude = -98.430814;
        // $location->description = "I can visit and walk pets during the day while their family is not home! I can also care for your pets while you are out of town. I am a stay at home mom with a very flexible schedule that allows me to work with your schedule. I know that my three dogs do MUCH better when in their own home when our family is out of town. They are rescue dogs and I do not want to traumatize them by putting them back in a shelter. Many other pet owners feel the same way, so I will travel to your home to feed, water, play with, reassure your fur babies while you are gone.";
        // $location->user_id = 14;
        // $location->save();
        
        $location = new Location();
        $location->street_number = "615";
        $location->street_name = "E Contour Dr";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78212";
        $location->country = "United States";
        $location->latitude = 29.476033;
        $location->longitude = -98.484726;
        $location->description = "";
        $location->user_id = 1;
        $location->save();

        $location = new Location();
        $location->street_number = "5135";
        $location->street_name = "Merlin Dr";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78218";
        $location->country = "United States";
        $location->latitude = 29.50104;
        $location->longitude = -98.388932;
        $location->description = "";
        $location->user_id = 2;
        $location->save();

        $location = new Location();
        $location->street_number = "722";
        $location->street_name = "Imlay";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78209";
        $location->country = "United States";
        $location->latitude = 29.486672 ;
        $location->longitude = -98.471726;
        $location->description = "";
        $location->user_id = 3;
        $location->save();

        $location = new Location();
        $location->street_number = "3725";
        $location->street_name = "Big Meadows St";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78230";
        $location->country = "United States";
        $location->latitude = 29.546859;
        $location->longitude = -98.559129;
        $location->description = "";
        $location->user_id =4;
        $location->save();

        $location = new Location();
        $location->street_number = "279";
        $location->street_name = "Ranch Pass";
        $location->city = "Fair Oaks Ranch";
        $location->state = "TX";
        $location->zip = "78015";
        $location->country = "United States";
        $location->latitude = 29.777595;
        $location->longitude = -98.632195;
        $location->description = "";
        $location->user_id = 5;
        $location->save();


        }

}