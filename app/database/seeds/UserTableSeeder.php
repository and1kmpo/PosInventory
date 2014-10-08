<?php

class UserTableSeeder extends Seeder {

	public function run(){

		DB::table('users')->delete();

		User::create(array(
			'username' => 'firstUser',
			'password' => Hash::make('firstPassword')

			));

		User::create(array(
			'username' => 'seconduser',
			'password' => Hash::make('secondPassword')

			));
	}
}