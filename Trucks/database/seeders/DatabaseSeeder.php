<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TruckSeeder;
use Database\Seeders\DriverSeeder;
use Database\Seeders\DriverTruckSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TruckSeeder::class,
            DriverSeeder::class,
            DriverTruckSeeder::class
        ]);
    }
}
