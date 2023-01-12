<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookDetail;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $books = Book::all();

        foreach ($books as $book) {
            BookDetail::create([
                'book_id' => $book->id,
                'description' => $faker->paragraph(5),
                'length' => $faker->numberBetween(2, 1000),
                'isbn' => Str::orderedUuid(),
                'publisher' => $faker->words(3, true),
                'stock' => $faker->numberBetween(0, 1000),
                'price' => $faker->numberBetween(1000, 1000000),
                'images' => $faker->numberBetween(1,5) . '.png'
            ]);
        }
    }
}
