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
        Category::create([
            "name" => "Kategori 1",
            "slug" => "kategori-1"
        ]);

        Category::create([
            "name" => "Kategori 2",
            "slug" => "kategori-2"
        ]);

        Category::create([
            "name" => "Kategori 3",
            "slug" => "kategori-3"
        ]);
    }
}
