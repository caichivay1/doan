<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = [
            ['name' =>'user','email' => 'anhvan@gmail.com' , 'password' => Hash::make('anhvan')],
        	['name' =>'admin','email' => 'admin@gmail.com' , 'password' => Hash::make('123456')]


        ];
        DB::table('users')->insert($user);
    }
}
