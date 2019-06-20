<?php

namespace App\Http\Controllers;

use App\Model\Hall;
use App\Model\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $halls = (new Hall)->getHalls();
        return view('home', compact('halls'));
    }
}