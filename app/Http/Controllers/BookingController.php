<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class BookingController extends BaseController
{
    public function index()
    {
        return(view('login'));
    }

    public function showSlotBooking(Request $request, $equipment_id){

    }
}
