<?php

namespace Database\Factories;

use App\Enums\GenreStyle;
use Database\Seeders\GenreSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genres = ['Classic', 'Fantasy', 'Horror', 'Literary Fiction', 'Comic Book or Graphic Novel', 'Historical Fiction', 'Mystery', 'Fabulation', 'Folklore'];
        $genreStyles = GenreStyle::toArray();
        $randomStylesIndex = array_rand($genreStyles);
        $randomGenreIndex = array_rand($genres);

        return [
            'name' => $genres[$randomGenreIndex],
            'style' => $genreStyles[$randomStylesIndex],
        ];
    }
}
