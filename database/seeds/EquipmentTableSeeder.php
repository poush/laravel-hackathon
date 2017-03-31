<?php

use Illuminate\Database\Seeder;
use App\Equipment;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Equipment::create(
            [
                'name' => 'Equipment1',
                'description' => '',
                'scientist_id' => 1,
                'institute_id' => 1,
                'charges' => 200.00,
                'under_maintenance' => 0,
                'published' => 1
            ]
        );

        Equipment::create(
            [
                'name' => 'Equipment2',
                'description' => '',
                'scientist_id' => 2,
                'institute_id' => 1,
                'charges' => 300.00,
                'under_maintenance' => 0,
                'published' => 1
            ]
        );

        Equipment::create(
            [
                'name' => 'Equipment3',
                'description' => '',
                'scientist_id' => 1,
                'institute_id' => 2,
                'charges' => 400.00,
                'under_maintenance' => 0,
                'published' => 1
            ]
        );

        Equipment::create(
            [
                'name' => 'Equipment4',
                'description' => '',
                'scientist_id' => 2,
                'institute_id' => 2,
                'charges' => 500.00,
                'under_maintenance' => 0,
                'published' => 1
            ]
        );

        Equipment::create(
            [
                'name' => 'Equipment5',
                'description' => '',
                'scientist_id' => 1,
                'institute_id' => 3,
                'charges' => 600.00,
                'under_maintenance' => 1,
                'published' => 1
            ]
        );
    }
}
