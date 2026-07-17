<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'judul' => 'Dilan',
            'author_id' => 1,
            'category_id' => 1,
            'gambar' => 'dilan.jpg'
        ]);

        Book::create([
            'judul' => 'Hujan Bulan Juni',
            'author_id' => 2,
            'category_id' => 2,
            'gambar' => 'hujan bulan juni.jpg'
        ]);
        
        Book::create([
            'judul' => 'Kamu Tidak Istimewa',
            'author_id' => 3,
            'category_id' => 3,
            'gambar' => 'kamu tidak istimewa.jpg'
        ]);

        Book::create([
            'judul' => 'Laskar Pelangi',
            'author_id' => 4,
            'category_id' => 4,
            'gambar' => 'Laskar Pelangi.jpeg'
        ]);

        Book::create([
            'judul' => 'Pulang Pergi',
            'author_id' => 5,
            'category_id' => 5,
            'gambar' => 'pulang pergi.jpeg'
        ]);
    }
}