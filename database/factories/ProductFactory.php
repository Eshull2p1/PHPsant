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
            "product_id" => $this->faker->unique()->numerify('#####'),
            "product_name" => $this->faker->name,
            "product_details" => $this->faker->paragraph,
            "price" => $this->faker->randomFloat(2, 10, 1000),
            "stock" => $this->faker->numberBetween(0, 100),
        ];
    }
}
