<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Dog Food'],
            ['name' => 'Cat Food'],
            ['name' => 'Leashes'],
            ['name' => 'Pet Toys'],
            ['name' => 'Pet Beds'],
            ['name' => 'Dog Clothes'],
            ['name' => 'Cat Clothes'],
            
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
