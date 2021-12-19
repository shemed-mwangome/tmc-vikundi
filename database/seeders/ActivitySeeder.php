<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            ['name' => 'Kusaidiana'],
            ['name' => 'Kutengeneza Matofali'],
            ['name' => 'Kutengeneza Gypsum'],
            ['name' => 'Kuoka Mikate'],
            ['name' => 'Ushonaji']
        ];

        Activity::insert($activities);
    }
}
