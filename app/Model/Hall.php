<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public function getHalls(){
    	return Hall::all();
    }
}
