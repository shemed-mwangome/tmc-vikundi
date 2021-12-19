<?php

namespace Database\Seeders;

use App\Models\Street;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            WardSeeder::class,
            StreetSeeder::class,
            ActivitySeeder::class,
            CategorySeeder::class,
        ]);
    }
}
