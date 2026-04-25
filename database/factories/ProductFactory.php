<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
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
        $name = fake()->unique()->words(3, true);
        $name = ucwords((string) $name);

        return [
            'name' => $name,
            'sku' => fake()->unique()->numerify('SKU-####-####'),
            'slug' => Str::slug($name),
            'description' => fake()->paragraphs(3, true),
            'stock' => fake()->numberBetween(0, 100),
            'price' => fake()->randomFloat(2, 10000, 1000000), // Price between 10k and 1m
            'weight' => fake()->numberBetween(100, 2000), // Weight in grams
        ];
    }
}
