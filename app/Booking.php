<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
    protected $table = 'bookings';
    

    protected $fillable = ['*'];

    public function findAvailabilityFrom(Carbon $date){

        Equipment::where('')

    }

}
