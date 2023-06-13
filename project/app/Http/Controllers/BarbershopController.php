<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barbershop;
use App\Models\Barber;
use App\Models\Review;
use App\Models\Transaction;
use App\Models\Service;

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

    public function order($id){
        $barbershop=Barbershop::find($id);
        $barber = Barber::with('getShop')->get();
        $user = auth()->user();
        $service = Service::All();
        return view('order',[ 'barbershop'=>$barbershop,'barber'=>$barber,'service'=>$service]);
    }

    public function confirmation(Request $request,$id){
        $barbershop=Barbershop::find($id);
        $barber = Barber::with('getShop')->get();
        $user = auth()->user();
        $barbername = $request->input('barber');
        $service = $request->input('service');
        foreach($barber as $item){
            if($item->name == $barbername){
                $transaction = new Transaction();
                $transaction->user_id = $user->id;
                $transaction->barber_id=$item->id;
                $transaction->barbershop_id=$id;
                $transaction->service=$service;
                $transaction->price = '50000';
                $transaction->save();
            }
        }
         return redirect()->route('review',['id'=>$id]);
    }

    public function bypass($id){
        $barbershop=Barbershop::find($id);
        $user=auth()->user();
        return view('review',[ 'barbershop'=>$barbershop]);
    }

    public function review(Request $request,$id){
        $barbershop=Barbershop::find($id);
        $user=auth()->user();
        $content = $request->input('review');
        $review= new Review();
        $review->user_id = $user->id;
        $review->barbershop_id=$id;
        $review->content = $content;
        $review->save();

        return redirect()->route('barbershop_desc',['id'=>$id]);
    }

}
