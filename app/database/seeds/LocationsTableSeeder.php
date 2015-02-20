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
        $location->description = "I am a runner and would be happy to bring the pooch along on my morning runs. If they're not up to that, I will take them on extended morning and evening walks throughout Balboa Park. I will also throw around and ball to play fetch. Plus, if they love other dogs, we've got a couple of dog parks to go to.";
        $location->user_id = 6;
        $location->save();

        $location = new Location();
        $location->street_number = "838";
        $location->street_name = "Keats St";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78211";
        $location->country = "United States";
        $location->latitude = 29.375994;
        $location->longitude = -98.515532;
        $location->description = "I work from home and occasionally go into the office (which is close by) but come home for lunch to walk the Dog(s). I have trails and lots of grassy areas for the Dog(s) to be walked. It would rarely be left alone. I lost my dog after 17 years and would love to have the company. I live alone and am very clean and tidy and don't mind cleaning up any messes that may occur.";
        $location->user_id = 7;
        $location->save();

        $location = new Location();
        $location->street_number = "826";
        $location->street_name = "West Craig Pl";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78212";
        $location->country = "United States";
        $location->latitude = 29.451679;
        $location->longitude = -98.507297;
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
        $location->description = "24/7 supervision on fully fenced 1/2 acre. Your pet will feel safe & comfortable with me at home and playing in the yard. Individual attention and care is a priority. If quiet time in needed, it can be provided in a crate or gated area in my home.";
        $location->user_id = 9;
        $location->save();

        $location = new Location();
        $location->street_number = "202";
        $location->street_name = "Henry St";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78207";
        $location->country = "United States";
        $location->latitude = 29.443502;
        $location->longitude = -98.527537;
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
        
        $location = new Location();
        $location->street_number = "9855";
        $location->street_name = "Lauren Mist";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78251";
        $location->country = "United States";
        $location->latitude = 29.482518;
        $location->longitude = -98.679714;
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
        $location->street_number = "119";
        $location->street_name = "Moonlight Terrace";
        $location->city = "San Antonio";
        $location->state = "TX";
        $location->zip = "78233";
        $location->country = "United States";
        $location->latitude = 29.533795;
        $location->longitude = -98.385974;
        $location->description = "";
        $location->user_id = 5;
        $location->save();


        }

}