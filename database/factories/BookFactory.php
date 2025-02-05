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
    public function definition(): array
    {
        return [
            'title' => mb_convert_case(fake()->words(4, true), MB_CASE_TITLE),
            'isbn' => fake()->isbn13(),
            'description' => fake()->text(),
            'author' => fake()->name(),
            'publication_date' => fake()->date(),
        ];
    }
}
