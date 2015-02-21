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
        $location->description = "I work from home and occasionally go into the office (which is close by) but come home for lunch to walk the Dog(s). I have trails and lots of grassy areas for the Dog(s) to be walked. It would rarely be left alone. I lost my dog after 17 years and would love to have the company. I live alone and am very clean and tidy and don't mind cleaning up any messes that may occur.";
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
        $location->description = "We consider our guest dogs as members of the family. Dogs are always supervised in our fenced and secure back yard and in the home as well. Our dog Zachary sleeps in his crate (in our bedroom) and we think this is a good solution for night time or when we might be out for an hour or two. If guest dogs are not crate trained we can work on that or provide a private sleeping room for this purpose.";
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
        $location->description = "My boyfriend and I are major dog lovers! We have a playful 1 year old pug named Shuggums who loves people and dogs of all kind. I am working from home right now, so I would not be gone for more than 2-3 hours during the day. I take Shuggums on a long walk in the morning when we wake up, and in the evening. We love to go to the dog park near our home.";
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
        $location->description = "I can visit and walk pets during the day while their family is not home! I can also care for your pets while you are out of town. I am a stay at home mom with a very flexible schedule that allows me to work with your schedule. I know that my three dogs do MUCH better when in their own home when our family is out of town. They are rescue dogs and I do not want to traumatize them by putting them back in a shelter. Many other pet owners feel the same way, so I will travel to your home to feed, water, play with, reassure your fur babies while you are gone.";
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