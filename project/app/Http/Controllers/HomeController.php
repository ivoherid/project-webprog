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
        $barber=Barber::orderBy('rating','desc')->take(2)->get();
        return view('home',[
            "barber" => $barber,
            "articles"=>Article::all(),
            "promos"=>Promo::all(),
            "service"=>Service::all()
        ]);
    }

    public function topup(Request $request){
        $balance = auth()->user()->balance;
        $cash = $balance + $request->input('top-up');
        User::where('id', auth()->user()->id)
                ->update(['balance'=>$cash]);
        return redirect()->route('home');
    }
}
