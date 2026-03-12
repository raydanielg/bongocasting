<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Acting', 'description' => 'Film, TV, and Theatre actors'],
            ['name' => 'Modeling', 'description' => 'Fashion and commercial models'],
            ['name' => 'Music', 'description' => 'Singers, musicians, and performers'],
            ['name' => 'Dance', 'description' => 'Choreographers and dancers'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
            ]);
        }
    }
}
