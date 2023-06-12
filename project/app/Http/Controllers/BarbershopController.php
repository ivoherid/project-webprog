<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barbershop;
use App\Models\Barber;
use App\Models\Review;

class BarbershopController extends Controller
{
    public function index($id){
        $barber = Barber::with('getShop')->get();
        $barbershop=Barbershop::find($id);
        $review=Review::All();
        return view('barbershop_review',['review'=>$review, 'barbershop'=>$barbershop,'barber'=>$barber]);
    }

    public function desc($id){
        $barber = Barber::with('getShop')->get();
        $barbershop=Barbershop::find($id);
        return view('barbershop_desc',[ 'barbershop'=>$barbershop,'barber'=>$barber]);
    }
}
