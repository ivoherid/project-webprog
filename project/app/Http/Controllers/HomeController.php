<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Promo;
use App\Models\Service;
use App\Models\Barber;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $barber = Barber::all();
        return view('home',[
            "barber" => $barber,
            "articles"=>Article::all(),
            "promos"=>Promo::all(),
            "service"=>Service::all()
        ]);
    }
}
