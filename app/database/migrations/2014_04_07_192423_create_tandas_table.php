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
			$table->string('title', 200)->unique();
			$table->tinyInteger('user_num')->unsigned();

			// 1 = weekly, 2 = monthly
			$table->tinyInteger('time_period')->unsigned();
			
			$table->double('pay_per_user', 7, 2)->unsigned();
			$table->double('payout', 8, 2)->unsigned();
			$table->timestamps();
			$table->boolean('begun')->default(false);
			$table->timestamp('began_at')->nullable()->default(null);
			$table->timestamp('finished_at')->nullable()->default(null);
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
