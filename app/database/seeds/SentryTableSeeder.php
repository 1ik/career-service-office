<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SentryTableSeeder extends Seeder {

	public function run()
	{
		$users = [
			['first_name' => 'Anik', 'last_name' => 'Hasan', 'phone_number' => '063163009', 'cell_phone' => '+8801932986985', 'gender' => 'm', 'password' => 'alumni', 'email' => 'echoanik@gmail.com'],
			['first_name' => 'Dipankar', 'last_name' => 'Chaki', 'phone_number' => '023311882', 'cell_phone' => '+880171122121211', 'gender' => 'm', 'password' => 'alumni', 'email' => 'dcj@gmail.com'],
			['first_name' => 'Tanjina	', 'last_name' => 'Micky', 'phone_number' => '02882232311', 'cell_phone' => '+880181212112', 'gender' => 'f', 'password' => 'student', 'email' => 'micky@gmail.com'],
			['first_name' => 'Mosharrof', 'last_name' => 'Golam', 'phone_number' => '0187221212', 'cell_phone' => '+88019442322', 'gender' => 'm', 'password' => 'employer', 'email' => 'mosharrofkamal@gmail.com'],
			['first_name' => 'Ahmed', 'last_name' => 'Sharif', 'phone_number' => '0211221235', 'cell_phone' => '+8801872121211', 'gender' => 'm', 'password' => 'employer', 'email' => 'ahmedsharif@gmail.com'],
			['first_name' => 'Shahnoor', 'last_name' => 'Kabir', 'phone_number' => '0298221211', 'cell_phone' => '+8801713445532', 'gender' => 'm', 'password' => 'admin', 'email' => 'kaskabir@gmail.com'],
			['first_name' => 'Sanjida', 'last_name' => 'Kabir', 'phone_number' => '029912111', 'cell_phone' => '+880193711221', 'gender' => 'f', 'password' => 'admin', 'email' => 'sanjidakabir@gmail.com'],
			['first_name' => 'Tanvir', 'last_name' => 'Roushan', 'phone_number' => '0298122121', 'cell_phone' => '+8801712113164', 'gender' => 'm', 'password' => 'student', 'email' => 'tanvirroushan@gmail.com']
		];

		foreach ($users as $user) {
			Sentry::createUser($user);	
		}
	}

}