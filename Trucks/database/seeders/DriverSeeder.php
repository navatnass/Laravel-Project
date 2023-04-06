<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            [
                'first_name' => 'Jonas',
                'last_name' => 'Paulauskas',
                'date' => '1977-12-05',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'first_name' => 'Virgilijus',
                'last_name' => 'Nemeda',
                'date' => '1966-06-03',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'first_name' => 'Stasys',
                'last_name' => 'Zukauskas',
                'date' => '1981-05-05',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ]);
    }
}
