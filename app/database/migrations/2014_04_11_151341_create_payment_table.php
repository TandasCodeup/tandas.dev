<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment', function($table) {
			$table->increments('id');
			$table->double('amount', 11, 2)->unsigned();

			// 1 is in, 2 is out
			$table->tinyInteger('in_or_out')->unsigned();

			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('tanda_id')->unsigned()->index();
			$table->foreign('tanda_id')->references('id')->on('tandas');

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
		Schema::drop('payment');
	}

}
