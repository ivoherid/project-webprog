<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getShop(){
        return $this->belongsTo(Barbershop::class,'barbershop_id');
    }
}
