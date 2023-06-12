<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
            DB::table('barbers')->insert([
                'name' => 'Rusdi',
                'barbershop'=>1,
                'rating' => 5
            ],[
                'name' => 'Sepoeh',
                'barbershop'=>1,
                'rating' => 3
            ],[
                'name' => 'Wongkene',
                'barbershop'=>1,
                'rating' => 4
            ],[
                'name' => 'Bayoe',
                'barbershop'=>2,
                'rating' => 4
            ],[
                'name' => 'Wongkene',
                'barbershop'=>2,
                'rating' => 4
            ]);
    }
}
