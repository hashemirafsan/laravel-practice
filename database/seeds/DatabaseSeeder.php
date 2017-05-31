<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Address;
use App\Country;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'first_name' => 'Hashemi',
            'last_name' => 'Rafsan',
            'email' => 'rafsanhashemi@gmail.com',
            'password' => 123456, // encripts automatically
         	'gender' => 'male',
         	'date_of_birth' => '2011-02-01'
        ]);

        Country::create([
        	'name' => 'Bangladesh',
        	'iso2' => 'bd',
        	'iso3' => 'bdt',
        	'numeric' => '120',
        	'currency' => 'taka'
        ]);

	    Address::create([
	    	'user_id' => 1,
	    	'type' => 'Home',
	    	'address_line_1' => 'Some Address',
	    	'address_line_2' => 'Some Address',
	    	'city' => 'Sylhet',
	    	'state' => 'Sylhet',
	    	'postal_code' => 3100,
	    	'country_id' => 1
        ]);

    }
}
