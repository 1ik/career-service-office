<?php

class PsdpRegistrationsTableSeeder extends Seeder {

	public function run()
	{
        $psdp_regis = [
            [ 'semester' => 'spring', 'year' => 2014, 'status' => 'completed', 'registration_id' => 1 ],
            [ 'semester' => 'spring', 'year' => 2014, 'status' => 'completed', 'registration_id' => 1 ],
            [ 'semester' => 'spring', 'year' => 2014, 'status' => 'completed', 'registration_id' => 1 ],
        ];




        foreach($psdp_regis as $p) {
            PsdpRegistration::create($p);
        }
	}

}