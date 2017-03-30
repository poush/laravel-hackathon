<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_payable')->default(0);
            $table->float('amount')->nullable();
            $table->integer('equipment_id')->unsigned();

            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->dateTime('confirmed_at')->nullable();
            
            $table->smallInteger('status')->default(0);
            /**
                0 => Initial State, Record Created after selecting date.
                1 => Booking Done from user's end.
                2 => Waiting for Approval from Scientist
                3 => Waiting for Approval from Director
                4 => Waiting for Approval from Head Office
                5 => ___ Will be used if required ____
                6 => ___ Will be used if required ____
                7 => All Approval Done
                8 => Waiting for payment
                9 => Booking complete.
    
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
