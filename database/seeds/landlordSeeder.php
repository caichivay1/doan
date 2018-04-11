<?php

use Illuminate\Database\Seeder;

class landlordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $landlord = [
        	['name' =>'landlord' , 'email' =>'landlord@gmail.com' , 'password' => Hash::make('landlord')]
        ];
        DB::table('landlord')->insert($landlord);
    }
}
