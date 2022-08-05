<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\Category::factory(10)->create();

        \App\Models\Category::factory()->create([
            'title' => 'Fashion',
            'link' => 'example.com',
        ]);
        \App\Models\Category::factory()->create([
            'title' => 'Fashion',
            'link' => 'example.com',
        ]);
        \App\Models\Category::factory()->create([
            'title' => 'Fashion',
            'link' => 'example.com',
        ]);
    }
}
