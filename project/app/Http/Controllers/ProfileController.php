<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Barbershop;

class ProfileController extends Controller
{
   public function getreview(){
    $history=Review::with('getShop')->get();
    $review = Review::with('getUser')->get();
    return view('profile',['review'=>$review, 'history'=>$history]);
   }



}
