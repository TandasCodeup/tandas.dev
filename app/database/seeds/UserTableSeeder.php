<?php
 
	class UserTableSeeder extends Seeder {
	 
		public function run() {
			$user = User::create(array(
				'first_name' => 'Travis',
				'last_name' => 'Meyer',
				'email' => 'travis@codeup.com',
				'password' => Hash::make('qwerty'),
				'user_role' => 1
			));

			$faker = Faker\Factory::create();
 
			for ($i = 0; $i < 100; $i++) {
				$user = User::create(array(
					'first_name' => $faker->firstName,
					'last_name' => $faker->lastName,
					'email' => $faker->email,
					'password' => Hash::make($faker->word)
				));
			}
		}

	}

?>