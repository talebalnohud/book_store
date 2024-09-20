<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;



class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++) {
            Book::query()->create([
                'title' => 'book' . $i,
                'description' => 'This is a description '. $i,
                'author' => 'Taleb Al-Nohoud'. $i,
                'image' => 'https://placehold.co/600x400/eee/31343c',
                'price' => 100
        ]);
        }
    }
}
