<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'authors' => $this->faker->name,
            'description' => $this->faker->sentence(),
            'cover_image' => 'https://www.oldbooksbank.org/wp-content/uploads/2021/03/books_1200-1.jpg',
            'released_at' => $this->faker->date,
            'pages' => $this->faker->numberBetween(50, 1500),
            'isbn' => bin2hex(random_bytes(10)),
            'in_stock' => $this->faker->boolean,
        ];

    }
}
