<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wards = [
            ['name' =>"Azimio"],
            ['name' =>"Chang'ombe"],
            ['name' =>"Keko"],
            ['name' =>"Kurasini"],
            ['name' =>"Miburani"],
            ['name' =>"Mtoni"],
            ['name' =>"Sandali"],
            ['name' =>"Temeke"],
            ['name' =>"Tandika"],
            ['name' =>"Makangarawe"],
            ['name' =>"Yombo Vituka"],
            ['name' =>"Buza"],
            ['name' =>"Kilakala"],
            ['name' =>"Chamazi"],
            ['name' =>"Kilungule"],
            ['name' =>"Mbagala"],
            ['name' =>"Mbagala Kuu"],
            ['name' =>"Mianzini"],
            ['name' =>"Kibondemaji"],
            ['name' =>"Kijichi"],
            ['name' =>"Kiburugwa"],
            ['name' =>"Toangoma"],
            ['name' =>"Charambe"],
        ];
        Ward::insert($wards);
    }
}
