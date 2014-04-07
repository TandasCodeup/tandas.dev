<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTandasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tandas', function($table) {
			$table->increments('id');
			$table->string('title', 200);
			$table->tinyInteger('user_num')->unsigned();
			$table->string('time_period', '10');
			$table->double('pay_per_user', 7, 2)->unsigned();
			$table->double('payout', 8, 2)->unsigned();
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
		Schema::drop('tandas');
	}

}
