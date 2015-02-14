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
			$table->string('street', 200);
			$table->string('apt', 6);
			$table->string('city', 100);
			$table->string('state', 2);
			$table->integer('zip');
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
		Schema::table('locations', function($table){
			$table->dropForeign('users_user_id_foreign');
		});
		Schema::drop('locations');
	}

}
