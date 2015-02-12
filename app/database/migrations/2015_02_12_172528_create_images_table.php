<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('img_name', 200);

			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')->references('id')->on('locations');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('images', function($table){
			$table->dropForeign('images_location_id_foreign');
		});
		Schema::drop('images');
	}

}
