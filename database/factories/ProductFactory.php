<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->word,
            'description' => $faker->paragraph,
            'price' => $faker->numberBetween(1000, 4000),
            'category' => $faker->randomElement(['mens', 'womens', 'sporty']),
            'quantity' => $faker->randomDigit,

        ];
    }
}
