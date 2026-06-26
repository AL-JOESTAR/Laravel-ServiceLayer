<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;

/**
 * @extends Factory<Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'qty' => fake()->numberBetween(0,100),
            'price' => fake()->numberBetween(1000,50000),
        ];
    }
}
