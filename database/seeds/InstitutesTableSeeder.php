<?php

use Illuminate\Database\Seeder;
use \App\Institute;

class InstitutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institute::create(
            [
                'name' => 'BVP',
                'address' => 'Paschim Vihar, Delhi',
                'state' => 'Delhi'
            ]
        );

        Institute::create(
            [
                'name' => 'GNIT',
                'address' => 'Neelkunj, Kolkata',
                'state' => 'Kolkata'
            ]
        );

        Institute::create(
            [
                'name' => 'DRDO',
                'address' => 'Dehradhun, UK',
                'state' => 'Uttarakhand'
            ]
        );

        Institute::create(
            [
                'name' => 'QWER',
                'address' => 'Juhu Beach, Bombay',
                'state' => 'Mumbai'
            ]
        );
    }
}
