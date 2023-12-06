<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'article' => fake()->unique()->numberBetween(1000, 2000),
        'name' => fake()->unique()->word(),
        'unit' => fake()->randomElement(['шт', 'л']),
        'quantity' => fake()->numberBetween(1, 100),
        'price' => fake()->numberBetween(500, 3000),
        ];
    }
}
