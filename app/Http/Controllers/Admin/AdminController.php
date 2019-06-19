<?php

namespace App\Http\Controllers\Admin;

use App\Model\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	$bookings = (new Booking)->getBookings();
    	return view('dashboard',compact('bookings'));
    }
}
