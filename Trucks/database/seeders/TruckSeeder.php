<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trucks')->insert([
            [
                'make' => 'Volvo',
                'model' => 'FH',
                'description' => 'The Volvo FH is a heavy truck range manufactured by the Swedish company Volvo Trucks. It was originally introduced in late 1993 as the FH12 and FH16. FH stands for Forward control High entry, where numbers denominate engine capacity in litres.',
                'years' => '2021-03-01',
                'run' => 1250,
                'price' => 125000,
                'fuel' => 'Diesel',
                'type' => 'Used',
                'standart' => 'Euro 6',
                'countries' => 'German',
                'image' => 'https://www.volvotrucks.no/content/dam/volvo-trucks/markets/master/home/trucks/volvo-fh/others/volvo-fh-build-your-volvo-fh.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'make' => 'Scania',
                'model' => 'S',
                'description' => 'The S-series brings a whole new level of luxury to long distance driving. This truck has been developed for supreme comfort and style, with the focus on driver environment, interior space, safety and reliability.',
                'years' => '2018-03-01',
                'run' => 50,
                'price' => 11400,
                'fuel' => 'Diesel',
                'type' => 'New',
                'standart' => 'Euro 5',
                'countries' => 'Belgium',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd78AV7s5PrpClNxfikUGzcfEud-gmy6gvgeD_ia5q0g&s',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'make' => 'DAF',
                'model' => 'XF',
                'description' => 'The DAF XF is a range of semi trucks produced since 1997 by DAF Trucks. The XF 105 won the International Truck of the Year 2007 award. The truck features a 12.9 litre (PACCAR MX 11 or 13) engine and ZF AS Tronic gearbox in both manual and automatic formats.',
                'years' => '2015-12-01',
                'run' => 250000,
                'price' => 74500,
                'fuel' => 'Diesel',
                'type' => 'New',
                'standart' => 'Euro 4',
                'countries' => 'Lithuania',
                'image' => 'https://www.dafusedtrucks.com/-/media/images/daf-used-trucks/home/dafusedtrucks-tractor.png?mw=525&rev=c5462aff15a144e6b73d083c4afd05c7&hash=03A4B5C818BA1D92F69C87AED03A25DA',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
