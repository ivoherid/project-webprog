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
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'address' => 'jakarta',
            'balance' => 0
        ]);
        DB::table('barbershops')->insert([[
            'id'=> 1,
            'name' => 'Grogol',
            'address' => 'Jakarta Selatan',
            'rating' => 5,
            ],[
            'id' =>2,
            'name' => 'Binoes',
            'address' => 'Kemanggisan',
            'rating' => 5,
            ]]);
            DB::table('barbers')->insert([[
                'name' => 'Rusdi',
                'barbershop'=>'Grogol',
                'barbershop_id'=>1,
                'rating' => 5
            ],[
                'name' => 'Sepoeh',
                'barbershop'=>'Binoes',
                'barbershop_id'=>2,
                'rating' => 3
            ],[
                'name' => 'Wongkene',
                'barbershop'=>'Binoes',
                'barbershop_id'=>2,
                'rating' => 4
            ],[
                'name' => 'Bayoe',
                'barbershop'=>'Binoes',
                'barbershop_id'=>1,
                'rating' => 4
            ],[
                'name' => 'Wongkene',
                'barbershop'=>'Grogol',
                'barbershop_id'=>1,
                'rating' => 4
            ]]);
    }
}
