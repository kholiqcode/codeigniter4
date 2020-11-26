<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;

class RoleSeeder extends Seeder
{
	public function run()
	{
		$faker = Factory::create('id_ID');

		for ($i = 1; $i <= 9; $i++) {
			$data = [
				'name' => $faker->jobTitle,
				'updated_by'    => $faker->numberBetween(1,999),
				'updated_at'    => Time::createFromTimestamp($faker->unixTime()),
				'created_by'    => $faker->numberBetween(1,999),
				'created_at'    => Time::createFromTimestamp($faker->unixTime()),
			];

			// Using Query Builder
			$this->db->table('roles')->insert($data);
		}
	}
}
