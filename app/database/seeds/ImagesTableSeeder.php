<?php


class ImagesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('images')->delete();

        $user = User::first();

        $image = new Image();
        $image->img_name = "/uploads/Host1-1.jpg";
        $image->location_id = "1";
        $image->save();
        
        $image = new Image();
        $image->img_name = "/uploads/Host1-2.jpg";
        $image->location_id = "1";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host1-3.jpg";
        $image->location_id = "1";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host1-4.jpg";
        $image->location_id = "1";
        $image->save();
	
        $image = new Image();
        $image->img_name = "/uploads/Host2-1.jpg";
        $image->location_id = "2";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host2-2.jpg";
        $image->location_id = "2";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host2-3.jpg";
        $image->location_id = "2";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host2-4.jpg";
        $image->location_id = "2";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host3-1.jpg";
        $image->location_id = "3";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host3-2.jpg";
        $image->location_id = "3";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host3-3.jpg";
        $image->location_id = "3";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host3-4.jpg";
        $image->location_id = "3";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host4-1.jpg";
        $image->location_id = "4";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host4-2.jpg";
        $image->location_id = "4";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host4-3.jpg";
        $image->location_id = "4";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host4-4.jpg";
        $image->location_id = "4";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host5-1.jpg";
        $image->location_id = "5";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host5-2.jpg";
        $image->location_id = "5";
        $image->save();
        $image = new Image();
        $image->img_name = "/uploads/Host5-3.jpg";
        $image->location_id = "5";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host5-4.jpg";
        $image->location_id = "5";
        $image->save();
        
        $image = new Image();
        $image->img_name = "/uploads/Host5-5.jpg";
        $image->location_id = "5";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host6-1.jpg";
        $image->location_id = "6";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host6-2.jpg";
        $image->location_id = "6";
        $image->save();

        $image = new Image();
        $image->img_name = "/uploads/Host6-3.jpg";
        $image->location_id = "6";
        $image->save();

        }

}