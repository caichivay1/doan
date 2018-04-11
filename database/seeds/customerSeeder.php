<?php

use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = [
        	['name' =>'anh van' , 'email' =>'customer@gmail.com' , 'password' => Hash::make('customer')],
        	['name' =>'customer' , 'email' =>'customer1@gmail.com' , 'password' => Hash::make('customer')]
        ];
        DB::table('customer')->insert($customer);
    }
}
