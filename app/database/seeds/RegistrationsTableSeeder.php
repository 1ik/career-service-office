<?php

class RegistrationsTableSeeder extends Seeder {

	public function run()
	{

        $registraions = [
            [
                'starts_on' => new DateTime('2014-12-24 15:20:00'),
                'ends_on' => new DateTime('2015-01-17 15:20:00'),
                'open' => true,
                'capacity' => 30,
                'open' => true
            ],
            [
                'starts_on' => new DateTime('2015-01-12 18:20:00'),
                'ends_on' => new DateTime('2015-02-13 10:00:00'),
                'open' => true,
                'capacity' => 30,
                'open' => true
            ],
            [
                'starts_on' => new DateTime('2015-03-03 11:15:00'),
                'ends_on' => new DateTime('2015-04-01 17:00:00'),
                'open' => false,
                'capacity' => 30,
                'open' => true
            ],
            [
                'starts_on' => new DateTime('2014-12-21 11:15:00'),
                'ends_on' => new DateTime('2015-01-04 17:00:00'),
                'open' => false,
                'capacity' => 8,
                'open' => true
            ],
            [
                'starts_on' => new DateTime('2015-01-03 11:15:00'),
                'ends_on' => new DateTime('2015-01-15 11:00:00'),
                'open' => false,
                'capacity' => 10,
                'open' => true
            ]
        ];

		foreach($registraions as $r) {
            Registration::create($r);
        }

	}

}