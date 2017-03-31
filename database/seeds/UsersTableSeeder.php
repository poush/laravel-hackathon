<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create( 
    		[
    			'name'  	=> 'Piyush',
    			'email'		=> 'me@ipiyush.com',
    			'password'	=> '12345678',
    			'power'		=> 0
    		]
    	);

    	User::create( 
    		[
    			'name'  	=> 'Piyush_Scientist',
    			'email'		=> 's@s.com',
    			'password'	=> '12345678',
    			'power'		=> 1
    		]
    	);

    	User::create( 
    		[
    			'name'  	=> 'Piyush',
    			'email'		=> 'me@ipiyush.com',
    			'password'	=> '12345678',
    			'power'		=> 0
    		]
    	);

    }
}
