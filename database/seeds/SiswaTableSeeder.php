<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$faker=Faker\Factory::create('id_ID');

    	for ($looper=0; $looper <10 ; $looper++) { 
    		# code...
	    	DB::table('siswas')->insert([
	    		'nama'	=>	$faker->name,
	    		'alamat' =>  $faker->address,
	    		'created_at' => now()
	    	]);
    	}
    }
}
