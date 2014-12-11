<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DepartmentsTableSeeder extends Seeder {

	public function run()
	{

		$depts = [
			['name' => 'School of Electronics and Computer Science'],
			['name' => 'BRAC Business School'],
			['name' => 'Economics'],
			['name' => 'Mathematics and Natural Science'],
			['name' => 'English'],
			['name' => 'Pharmacy'],
			['name' => 'Law'],
			['name' => 'Anthropology'],
			['name' => 'Electrical and Electronics Engineering'],
		];

	}

}