<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DriverTruckSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('driver_truck')->insert([
            [
                'driver_id' => 1,
                'truck_id' => 1,
            ],
            [
                'driver_id' => 2,
                'truck_id' => 2,
            ],
            [
                'driver_id' => 3,
                'truck_id' => 3,
            ]
        ]);
    }
}
