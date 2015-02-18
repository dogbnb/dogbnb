<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('street_number');
			$table->string('street_name');
			$table->string('city');
			$table->string('state');
			$table->integer('zip');
			$table->string('country');
			$table->decimal('latitude', 10, 7);
			$table->decimal('longitude', 10, 7);
			$table->text('description')->nullable();
			$table->timestamps();
			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
