<?php

	class PaymentTableSeeder extends Seeder {

		public function run() {

			$faker = Faker\Factory::create();

			for($i = 0; $i < 500; $i++) {
				$payment = Payment::create(array(
					'amount' => $faker->randomFloat(2, 100, 1000),
					'in_or_out' => $faker->randomNumber(1, 2),
					'user_id' => $faker->randomNumber(1, 101),
					'tanda_id' => $faker->randomNumber(1, 50)
				));
			}
		}
	}

?>