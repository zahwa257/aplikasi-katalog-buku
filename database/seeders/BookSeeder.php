<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [

            [
                'judul' => 'Bumi',
                'author_id' => 1,
                'category_id' => 1,
                'gambar' => 'bumi.jpg'
            ],

            [
                'judul' => 'Laskar Pelangi',
                'author_id' => 2,
                'category_id' => 1,
                'gambar' => 'laskar-pelangi.jpg'
            ],

            [
                'judul' => 'Perahu Kertas',
                'author_id' => 3,
                'category_id' => 1,
                'gambar' => 'perahu-kertas.jpg'
            ],

            [
                'judul' => 'Bumi Manusia',
                'author_id' => 4,
                'category_id' => 1,
                'gambar' => 'bumi-manusia.jpg'
            ],

            [
                'judul' => 'Ronggeng Dukuh Paruk',
                'author_id' => 5,
                'category_id' => 1,
                'gambar' => 'ronggeng-dukuh-paruk.jpg'
            ],

            [
                'judul' => 'Cantik Itu Luka',
                'author_id' => 6,
                'category_id' => 1,
                'gambar' => 'cantik-itu-luka.jpg'
            ],

            [
                'judul' => 'Ayat-Ayat Cinta',
                'author_id' => 7,
                'category_id' => 1,
                'gambar' => 'ayat-ayat-cinta.jpg'
            ],

            [
                'judul' => 'Surga yang Tak Dirindukan',
                'author_id' => 8,
                'category_id' => 1,
                'gambar' => 'surga-yang-tak-dirindukan.jpg'
            ],

            [
                'judul' => 'Negeri 5 Menara',
                'author_id' => 9,
                'category_id' => 1,
                'gambar' => 'negeri-5-menara.jpg'
            ],

            [
                'judul' => 'Laut Bercerita',
                'author_id' => 10,
                'category_id' => 1,
                'gambar' => 'laut-bercerita.jpg'
            ],

            [
                'judul' => 'Saman',
                'author_id' => 11,
                'category_id' => 1,
                'gambar' => 'saman.jpg'
            ],

            [
                'judul' => 'Dilan: Dia adalah Dilanku Tahun 1990',
                'author_id' => 12,
                'category_id' => 1,
                'gambar' => 'dilan-1990.jpg'
            ],

            [
                'judul' => 'Kambing Jantan',
                'author_id' => 13,
                'category_id' => 1,
                'gambar' => 'kambing-jantan.jpg'
            ],

            [
                'judul' => 'Critical Eleven',
                'author_id' => 14,
                'category_id' => 1,
                'gambar' => 'critical-eleven.jpg'
            ],

            [
                'judul' => 'Entrok',
                'author_id' => 15,
                'category_id' => 1,
                'gambar' => 'entrok.jpg'
            ],

            [
                'judul' => 'Hujan Bulan Juni',
                'author_id' => 16,
                'category_id' => 1,
                'gambar' => 'hujan-bulan-juni.jpg'
            ],

            [
                'judul' => 'Telegram',
                'author_id' => 17,
                'category_id' => 1,
                'gambar' => 'telegram.jpg'
            ],

            [
                'judul' => 'Olenka',
                'author_id' => 18,
                'category_id' => 1,
                'gambar' => 'olenka.jpg'
            ],

            [
                'judul' => 'Pada Sebuah Kapal',
                'author_id' => 19,
                'category_id' => 1,
                'gambar' => 'pada-sebuah-kapal.jpg'
            ],

            [
                'judul' => 'Tirani dan Benteng',
                'author_id' => 20,
                'category_id' => 1,
                'gambar' => 'tirani-dan-benteng.jpg'
            ],

        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}