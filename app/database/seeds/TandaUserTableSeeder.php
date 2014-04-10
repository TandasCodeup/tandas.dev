<?php

	class TandaUserTableSeeder extends Seeder {

		public function run() {

			$faker = Faker\Factory::create();

			for ($i = 0; $i < 200; $i++) {
				$tanda_user = array(
					'tanda_id' => $faker->randomNumber(1, 50),
					'user_id' => $faker->randomNumber(1, 101)
				);
				DB::table('tanda_user')->insert($tanda_user);
			}

		}

	}

?>