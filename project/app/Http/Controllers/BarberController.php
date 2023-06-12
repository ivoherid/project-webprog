<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;

class BarberController extends Controller
{
    public function homeview(){
        $barber = Barber::All();
        return view('home')->with('barber',$barber);
    }
}
