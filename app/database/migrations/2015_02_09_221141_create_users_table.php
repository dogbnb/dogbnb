<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('role', 5);
		    $table->string('fname', 50);
		    $table->string('lname', 50);
		    $table->char('phone', 10);
		    $table->string('email', 200);
		    $table->string('nickname', 200)->nullable();
		    $table->string('size_allowed', 6)->nullable();
		    $table->string('password', 255);
		    $table->rememberToken();
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
		Schema::drop('users');
	}

}
