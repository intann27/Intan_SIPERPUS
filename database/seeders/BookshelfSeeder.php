<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
        'code' => 'BS001',
        'name' => 'Novel',
        ]);
        Book::create([
            'title' => 'paimon terbang',
            'author' => 'genshin',
            'year' => '2024',
            'publisher' => 'II',
            'city' => 'cianjur',
            'cover' => 'abcdefg.png',
            'bookshelf_id' => '1',

        ]);
    }
}
