<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
        	['name' =>'admin','email' => 'admin@gmail.com' , 'password' => Hash::make('admin')]


        ];
        DB::table('admins')->insert($admin);
    }
}
