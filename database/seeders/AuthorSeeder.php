<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create([
            'nama' => 'Pidi Baiq'
        ]);

        Author::create([
            'nama' => 'Sapardi Djoko Damono'
        ]);
        Author::create([
            'nama' => 'Natasha Rizky'
        ]);
        Author::create([
            'nama' => 'Andrea Hirata'
        ]);
        Author::create([
            'nama' => 'Tere Liye'
        ]);
    }
}