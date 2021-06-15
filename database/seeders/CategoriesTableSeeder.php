<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Economy'
        ]);
        Category::create([
            'name' => 'Entertainment'
        ]);
        Category::create([
            'name' => 'Technology'
        ]);
        Category::create([
            'name' => 'School'
        ]);
        Category::create([
            'name' => 'Sport'
        ]);
    }
}
