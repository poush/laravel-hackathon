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
    			'password'	=> Hash::make('12345678'),
    			'power'		=> 0
    		]
    	);

    	User::create( 
    		[
    			'name'  	=> 'Piyush_Scientist',
    			'email'		=> 's@s.com',
    			'password'	=> Hash::make('12345678'),
    			'power'		=> 1
    		]
    	);

    	User::create( 
    		[
    			'name'  	=> 'Piyush Director',
    			'email'		=> 'abcxyz@gmal.com',
    			'password'	=> Hash::make('12345678'),
    			'power'		=> 2
    		]
    	);

        User::create(
            [
                'name'  	=> 'Piyush Admin',
                'email'		=> 'abcxhbyz@gmal.com',
                'password'	=> Hash::make('12345678'),
                'power'		=> 3
            ]
        );

        User::create(
            [
                'name'  	=> 'Piyush Head',
                'email'		=> 'aabbccxxyyzz@gmal.com',
                'password'	=> Hash::make('12345678'),
                'power'		=> 4
            ]
        );

    }
}
