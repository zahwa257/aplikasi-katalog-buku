<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'nama' => 'Romance'
        ]);

        Category::create([
            'nama' => 'Drama'
        ]);

        Category::create([
            'nama' => 'Fiksi'
        ]);

        Category::create([
            'nama' => 'Petualangan'
        ]);

        Category::create([
            'nama' => 'Aksi'
        ]);
        
    }
}