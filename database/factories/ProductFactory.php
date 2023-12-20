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
        'article' => fake()->unique(100000)->numberBetween(1000, 9999),
        'name' => fake()->unique()->word(),
        'unit' => fake()->randomElement(['шт', 'л']),
        'quantity' => fake()->numberBetween(1, 100),
        'price' => fake()->numberBetween(500, 3000),
        ];
    }
}
