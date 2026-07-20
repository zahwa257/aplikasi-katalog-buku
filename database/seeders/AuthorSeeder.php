<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            'Tere Liye',
            'Andrea Hirata',
            'Dee Lestari',
            'Pramoedya Ananta Toer',
            'Ahmad Tohari',
            'Eka Kurniawan',
            'Habiburrahman El Shirazy',
            'Asma Nadia',
            'Ahmad Fuadi',
            'Leila S. Chudori',
            'Ayu Utami',
            'Pidi Baiq',
            'Raditya Dika',
            'Ika Natassa',
            'Okky Madasari',
            'Sapardi Djoko Damono',
            'Putu Wijaya',
            'Budi Darma',
            'Nh. Dini',
            'Taufiq Ismail',
        ];

        foreach ($authors as $author) {
            Author::create([
                'nama' => $author,
            ]);
        }
    }
}