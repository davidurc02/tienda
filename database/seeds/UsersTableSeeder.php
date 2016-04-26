<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'Type' => 'regular',
			'name' => 'catia',
			'lastName' => 'rincon',
			'username' => 'crincon',
			'cellphone' => '3188130000',
            'email' => 'crincon@gmail.com',
            'password' => 'messenger',
        ]);
        DB::table('users')->insert([
			'Type' => 'regular',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
			'Type' => 'regular',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
			'Type' => 'premium',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
			'Type' => 'premium',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
