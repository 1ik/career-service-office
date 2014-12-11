<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$courses = [
			'name' => 'Computer Science',
			'name' => 'Probablistic Robotics',
			'name' => 'Data Science',
			'name' => 'Artifical Intelligence',
			'name' => 'Theoritical Computer Science',
			'name' => 'Applied Human Computer Interaction',
			'name' => 'High Performance Computing'
		];
	}

}