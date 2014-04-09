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
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('email', 50)->unique();
			$table->string('password', 100);
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('img_path', 200);
			$table->double('trust_rate', 4, 2);
			$table->timestamps();
			$table->tinyInteger('user_role')->unsigned();
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
