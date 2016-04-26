<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
			'Type' => 'admin',
			'name' => 'david',
			'lastName' => 'rodriguez',
			'username' => 'drodriguez',
			'cellphone' => '3187935807',
            'email' => 'drodriguez@technisupport.com',
            'password' => 'messenger',
        ]);
        DB::table('staff')->insert([
			'Type' => 'Servicio al cliente',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@hotmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('staff')->insert([
			'Type' => 'Cajero',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@hotmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('staff')->insert([
			'Type' => 'Cajero',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@hotmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('staff')->insert([
			'Type' => 'Vendedor',
			'name' => str_random(10),
			'lastName' => str_random(10),
			'username' => str_random(10),
			'cellphone' => str_random(10),
            'email' => str_random(10).'@hotmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
