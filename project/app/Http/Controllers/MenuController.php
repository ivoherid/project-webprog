<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barbershop;

class MenuController extends Controller
{
    public function index(){
        $barbershop = Barbershop::All();
        return view('barbershopmenu')->with('barbershop',$barbershop);
    }
}
