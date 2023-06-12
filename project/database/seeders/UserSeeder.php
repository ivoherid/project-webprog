<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'name' => 'Ivo Herid Lesmono',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'address' => 'Jakarta Tenggara',
            'balance' => 0
        ],[
            'name' => 'Anderizz',
            'email' => 'grady@gmail.com',
            'password' => bcrypt('grady'),
            'address' => 'Jakarta Timur',
            'balance' => 0
        ]]);
        DB::table('barbershops')->insert([[
            'id'=> 1,
            'name' => 'Barber Grogol',
            'address' => 'Jakarta Selatan',
            'rating' => 5,
            ],[
            'id' =>2,
            'name' => 'Barber Binoes',
            'address' => 'Kemanggisan',
            'rating' => 4.5,
            ]]);

            DB::table('barbers')->insert([[
                'name' => 'Roesdi',
                'barbershop'=>'Grogol',
                'barbershop_id'=>1,
                'rating' => 5
            ],[
                'name' => 'Sepoeh',
                'barbershop'=>'Binoes',
                'barbershop_id'=>2,
                'rating' => 3.5
            ],[
                'name' => 'Wongkene',
                'barbershop'=>'Binoes',
                'barbershop_id'=>2,
                'rating' => 4.5
            ],[
                'name' => 'Bayoe',
                'barbershop'=>'Binoes',
                'barbershop_id'=>1,
                'rating' => 4.5
            ],[
                'name' => 'Wongkene',
                'barbershop'=>'Grogol',
                'barbershop_id'=>1,
                'rating' => 2.5
            ]]);
            DB::table('reviews')->insert([[
                'user_id'=> 1,
                'barbershop_id'=>1,
                'content' => 'waw sangat menarik'
                ],[
                'user_id'=> 2,
                'barbershop_id'=>1,
                'content' => 'Waduh'
                ],[
                'user_id'=> 1,
                'barbershop_id'=>2,
                'content' => 'HMMM menarik'
                ],[
                'user_id'=> 2,
                'barbershop_id'=>2,
                'content' => 'Jadi ketagihan'
                ],[
                'user_id'=> 1,
                'barbershop_id'=>1,
                'content' => 'Sangat mantap'
                ]]);
    }
}
