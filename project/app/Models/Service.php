<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service
{
    private static $service = [
        [
            "title" => "Haircut+Wash",
            "link" => 'https://www.youtube.com/watch?v=o42exbFjvhQ&t=595s'
        ],
        [
            "title" => "Hair Coloring",
            "link" => ''
        ],
        [
            "title" => "Beard/Mustache Styling",
            "link" => '09/06/2023'
        ]
    ];

    public static function all(){
        return self::$service;
    }
}
