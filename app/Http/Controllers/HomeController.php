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
    public function ajaxBooking(Request $request)
    {
        $this->validate($request, [
            'hall_id' => 'required|integer',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $data = (new Booking)->saveBooking($request);
        if($data){
            $response = array(
                'status' => 'success',
                'msg' => 'success'
            );
            return response()->json($response);
        }else{
            $response = array(
                'status' => 'failure',
                'msg' => 'failure'
            );
            return response()->json($response);
        }
    }
}