<?php

use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<20;$i++){
        	$title=$faker->realText(100,1);
        	$slug = str_slug($title.'-'.microtime(),'-');
        	$post = [
        		'title' => $title,
        		'landlord_id' =>'3',
        		'description' => $faker->realText(500,3),
        		'phone' => '0987654321',
      	  		'address' => $faker->address(),
      	  		'slug' => $slug,
              'land_type' =>'biệt thự',
      	  		'type' =>'Bán',
      	  		'price' =>'500000',
      	  		'avatar' =>$faker->imageUrl($width = 640, $height = 480),
              'area' =>'t/c3 minh thọ',
      	  		'action' =>'1'
        	];
        	DB::table('post')->insert($post);
        }
    }
}
