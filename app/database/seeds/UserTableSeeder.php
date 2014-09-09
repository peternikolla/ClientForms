<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Peter Nikolla',
			'username' => 'petern',
			'email'    => 'petern@hvnnet.com',
			'password' => Hash::make('Aw3some!!'),
		));
	}

}
