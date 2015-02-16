<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('in_at');
			$table->date('out_at');
			$table->timestamps();

			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')->references('id')->on('locations');

			$table->integer('dog_id')->unsigned();
			$table->foreign('dog_id')->references('id')->on('dogs');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::table('reservations', function($table){
		// 	$table->dropForeign('locations_location_id_foreign');
		// });
		// Schema::table('reservations', function($table){
		// 	$table->dropForeign('dogs_dog_id_foreign');
		// });
		Schema::drop('reservations');
	}

}
