<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;
    public function getShop(){
        return $this->belongsTo(Barbershop::class,'barbershop_id');
    }
}
