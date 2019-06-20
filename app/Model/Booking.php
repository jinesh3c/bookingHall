<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function hall(){
        return $this->belongsTo('App\Model\Hall');
    }
    public function user(){
        return $this->belongsTo('App\Model\User');
    }
	public function getBookings(){
		return Booking::orderBy('created_at','desc')->get();
	}
    public function saveBooking($request){
        $data = Booking::whereDate('start_date','<=',$request->end_date)
                        ->whereDate('end_date','>=',$request->start_date)
                        ->where('hall_id',$request->hall)
                        ->first();
        if($data){
            return null;
        }
    	$data = new Booking;
        $data->user_id = $request->user_id;
        $data->hall_id = $request->hall;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->save();
        return $data;
    }
}
