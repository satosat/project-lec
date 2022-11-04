<?php

namespace Database\Seeders;

use App\Models\Books;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Books::create([
                'title' => $faker->words(3, true),
                'author' => $faker->name()
            ]);
        }
    }
}
