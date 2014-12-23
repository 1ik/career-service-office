<?php


class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$courses = [
			['name' => 'Computer Science'],
			['name' => 'Probablistic Robotics'],
			['name' => 'Data Science'],
			['name' => 'Artifical Intelligence'],
			['name' => 'Theoritical Computer Science'],
			['name' => 'Applied Human Computer Interaction'],
			['name' => 'High Performance Computing']
		];

        foreach($courses as $c) {
            Course::create($c);
        }
	}

}