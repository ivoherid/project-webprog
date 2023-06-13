<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getShop(){
        return $this->belongsTo(Barbershop::class,'barbershop_id');
    }
}
