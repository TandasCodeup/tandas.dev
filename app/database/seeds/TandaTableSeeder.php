<?php

	class TandaTableSeeder extends Seeder {

		public function run() {

			$faker = Faker\Factory::create();

			for ($i = 0; $i < 50; $i++) {
				$randomUserNum = $faker->randomNumber(3, 10);
				$randomPayPerUser = $faker->randomFloat(2, 100, 1000);
				$payout = $randomUserNum * $randomPayPerUser;
				$tanda = Tanda::create(array(
					'title' => $faker->domainWord,
					'user_num' => $randomUserNum,
					'time_period' => 2,
					'pay_per_user' => $randomPayPerUser,
					'payout' => $payout
				));
			}
		}
	}

?>