<?php

namespace App\Http\Controllers\Admin;

use App\Model\Hall;
use App\Model\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	$bookings = (new Booking)->getBookings();
    	return view('admin/dashboard',compact('bookings'));
    }
    public function ajaxBooking(Request $request)
    {
        $this->validate($request, [
            'hall' => 'required|integer',
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
    public function ajaxGetHall(Request $request){
        $data = (new Hall)->getHallByKeyword($request->keyword);
    	$response = array(
            'status' => 'success',
            'msg' => $data
        );
        return response()->json($response);
    }
}