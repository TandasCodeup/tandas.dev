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

			$table->double('payment_amnt', 11, 2)->nullable()->unsigned();
			$table->double('payout_amnt', 11, 2)->nullable()->unsigned();

			$table->timestamp('date_req');

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
