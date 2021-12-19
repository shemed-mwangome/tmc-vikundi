<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = [
            ['name' => 'Wanawake'],
            ['name' => 'Wanaume'],
            ['name' => 'Vijana'],
            ['name' => 'Waendesha Pikipiki'],
            ['name' => 'Madereva']
        ];

        Category::insert($category);
    }
}
