<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('TandaTableSeeder');
		$this->command->info('Tanda table seeded!');

		$this->call('TandaUserTableSeeder');
		$this->command->info('Pivot table seeded!');

		$this->call('PaymentTableSeeder');
		$this->command->info('Payment table seeded!');
	}

}