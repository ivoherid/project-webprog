<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo
{

    private static $article = [
        [
            "image" => ""
        ]
    ];

    public static function all(){
        return self::$article;
    }
}
