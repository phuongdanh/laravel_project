<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => '','description' => 'Small'],
            ['name' => 'M','description' => 'Medium'],
            ['name' => 'L', 'description' => 'Large'],
            ['name' => 'XL', 'description' => 'Extra Large'],
        ]);
    }
}
