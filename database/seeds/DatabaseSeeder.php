<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        while ($i < 50)
		{
		DB::table('films')->insert([
		'naziv' => str_random(10),
		'godina' => date('Y-m-g'),
		'trajanje' => rand(30, 300)
		]);
		$i++		
		}

    }

}
