<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('DepartmentsTableSeeder');
		$this->call('CoursesTableSeeder');
		//$this->call('SentryTableSeeder');
        $this->call('RegistrationsTableSeeder');
        $this->call('RegistrationsTableSeeder');
        $this->call('PsdpRegistrationsTableSeeder');
        //$this->call('PagesTableSeeder');
        //$this->call('SectionsTableSeeder');
	}

}
