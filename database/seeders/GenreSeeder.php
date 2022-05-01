<?php

namespace Database\Seeders;

use App\Enums\GenreStyle;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
            ['name' => 'Classic', 'style' => GenreStyle::SECONDARY],
            ['name' => 'Fantasy', 'style' => GenreStyle::PRIMARY],
            ['name' => 'Horror', 'style' => GenreStyle::PRIMARY],
            ['name' => 'Literary Fiction', 'style' => GenreStyle::DANGER],
            ['name' => 'Comic Book', 'style' => GenreStyle::SUCCESS],
            ['name' => 'Historical Fiction', 'style' => GenreStyle::WARNING],
            ['name' => 'Mystery', 'style' => GenreStyle::LIGHT],
            ['name' => 'Fabulation', 'style' => GenreStyle::INFO],
            ['name' => 'Folklore', 'style' => GenreStyle::DARK],
        ]);
    }
}
