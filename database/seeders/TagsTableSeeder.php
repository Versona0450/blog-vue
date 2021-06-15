<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'book'
        ]);
        Tag::create([
            'name' => 'food'
        ]);
        Tag::create([
            'name' => 'drink'
        ]);
        Tag::create([
            'name' => 'soccer'
        ]);
        Tag::create([
            'name' => 'fiction'
        ]);
        Tag::create([
            'name' => 'dota'
        ]);
        Tag::create([
            'name' => 'brawlhalla'
        ]);
        Tag::create([
            'name' => 'money'
        ]);
    }
}
