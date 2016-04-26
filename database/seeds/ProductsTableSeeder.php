<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
			'description' => 'celular',
			'price' => 1000000,
        ]);
        DB::table('products')->insert([
			'description' => 'portatil',
			'price' => 1800000,
        ]);
        DB::table('products')->insert([
			'description' => 'CPU',
			'price' => 800000,
        ]);
        DB::table('products')->insert([
			'description' => 'mouse',
			'price' => 55000,
        ]);
        DB::table('products')->insert([
			'description' => 'teclado',
			'price' => 25000,
        ]);        
    }
}
