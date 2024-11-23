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
            'judul' => fake()->title(),
            'penulis' => fake()->name(),
            'penerbit' => fake()->name(),
            'isbn' => fake()->ean8(),
            'tahun_terbit' => fake()->year(),
        ];
    }
}