<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'slug' => 'maternity',
            ],
            [
                'slug' => 'newborn',
            ],
            [
                'slug' => 'children',
            ],
            [
                'slug' => 'in_nature',
            ],
            [
                'slug' => 'indoors',
            ],
            [
                'slug' => 'family',
            ],
        ]);
    }
}
