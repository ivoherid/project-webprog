<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service
{
    private static $service = [
        [
            "id"=>1,
            "title" => "Haircut+Wash",
            "price" => 50000,
            "link" => 'https://www.youtube.com/watch?v=o42exbFjvhQ&t=595s'
        ],
        [
            "id"=>2,
            "title" => "Hair Coloring",
            "price" => 145000,
            "link" => ''
        ],
        [
            "id"=>3,
            "title" => "Beard/Mustache Styling",
            "price" => 45000,
            "link" => '09/06/2023'
        ]
    ];

    public static function all(){
        return self::$service;
    }
}
