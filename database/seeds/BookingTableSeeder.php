<?php

use Illuminate\Database\Seeder;
use App\Booking;
use Carbon\Carbon;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Booking::create(
            [
                'is_payable' => 1,
                'amount' => 500.00,
                'equipment_id' => 1,
                'start_time' => Carbon::tomorrow(),
                'end_time' => Carbon::tomorrow()->addMinutes(60) ,
                'confirmed_at' => null,
                'status' => 1
            ]
        );

        Booking::create(
            [
                'is_payable' => 1,
                'amount' => 600.00,
                'equipment_id' => 1,
                'start_time' => Carbon::tomorrow()->addDays(5)->addMinutes(120),
                'end_time' => Carbon::tomorrow()->addDays(5)->addMinutes(180),
                'confirmed_at' => null,
                'status' => 1
            ]
        );

        Booking::create(
            [
                'is_payable' => 1,
                'amount' => 600.00,
                'equipment_id' => 1,
                'start_time' => Carbon::tomorrow()->addDays(5),
                'end_time' => Carbon::tomorrow()->addDays(5)->addMinutes(60),
                'confirmed_at' => Carbon::now(),
                'status' => 8
            ]
        );

        Booking::create(
            [
                'is_payable' => 1,
                'amount' => 600.00,
                'equipment_id' => 1,
                'start_time' => Carbon::today()->addDays(7),
                'end_time' => Carbon::today()->addDays(8),
                'confirmed_at' => null,
                'status' => 1
            ]
        );

        Booking::create(
            [
                'is_payable' => 1,
                'amount' => 250000.00,
                'equipment_id' => 1,
                'start_time' => Carbon::today()->addDays(9),
                'end_time' => Carbon::today()->addDays(10),
                'confirmed_at' => null,
                'status' => 1
            ]
        );

    }
}
