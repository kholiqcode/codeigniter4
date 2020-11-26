<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;

class UserSeeder extends Seeder
{
	public function run()
	{
		$faker = Factory::create('id_ID');

		for ($i = 1; $i <= 100; $i++) {
			$data = [
				'name' => $faker->name,
				'address' => $faker->address,
				'phone' => $faker->phoneNumber,
				'username' => $faker->userName,
				'email'    => $faker->email,
				'password'    => password_hash('12345678',PASSWORD_DEFAULT),
				'photo'    => $faker->md5.'.jpg',
				'role_id'    => $faker->randomDigitNotNull,
				'status'    => $faker->numberBetween(1,5),
				'updated_by'    => $faker->numberBetween(1,999),
				'updated_at'    => Time::createFromTimestamp($faker->unixTime()),
				'created_by'    => $faker->numberBetween(1,999),
				'created_at'    => Time::createFromTimestamp($faker->unixTime()),
			];

			// Using Query Builder
			$this->db->table('users')->insert($data);
		}
	}
}
