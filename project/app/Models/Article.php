<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article
{
    private static $article = [
        [
            "title" => "6 Tren Potongan Rambut 2023, Nomor 3 Akan Membuatmu Tercengang",
            "image" => "https://foto.kontan.co.id/Ohrz3SH23BdMi7J7XLG6JgDgO6w=/smart/filters:format(webp)/2023/01/26/1632610923p.jpg",
            "timestamp" => '05/06/2023'
        ],
        [
            "title" => "Potongan Undercut Ternyata Bisa Membuat Orang-Orang terpesona",
            "image" => "https://upload.wikimedia.org/wikipedia/commons/c/c6/Latte_art_3.jpg",
            "timestamp" => '12/12/2012'
        ],
        [
            "title" => "Ini Lho Model Rambut Raffi Muhammad dan Anaknya",
            "image" => "https://assets-pergikuliner.com/uploads/bootsy/image/14027/medium_medium_Caramel_Macchiato__www.allfoodsrecipes.com_.jpg",
            "timestamp" => '09/06/2023'
        ],
        [
            "title" => "Andrew Tate Bilang Ingin Memanjangkan Rambut, Ini Dia Alasannya",
            "image" => "https://www.thespruceeats.com/thmb/5PcCBEaUd1U1eFxfcKKPLVnZzfA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/affogato-4776668-hero-08-40d7a68d12ba46f48eaea3c43aba715c.jpg",
            "timestamp" => '12/05/2023'
        ],
        [
            "title" => "Oh Jadi Ini Potongan Rambut Cepmek yang Terkenal di Tiktok ",
            "image" => "https://www.thespruceeats.com/thmb/5PcCBEaUd1U1eFxfcKKPLVnZzfA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/affogato-4776668-hero-08-40d7a68d12ba46f48eaea3c43aba715c.jpg",
            "timestamp" => '11/09/2001'
        ]
    ];

    public static function all(){
        return self::$article;
    }
}
