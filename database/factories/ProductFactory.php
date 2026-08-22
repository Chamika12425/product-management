<?php

namespace Database\Factories;
// Add Product Model to use the factory to create products
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [

            'name' => fake()->word(3, true),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 100, 500000),
            'quantity' => fake()->numberBetween(1, 100),

        ];
    }
}
