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
            'name' => $this->faker->word,
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'price' => $this->faker->biasedNumberBetween($min = 1000, $max = 2000, $function = 'sqrt'),
            'category' => $this->faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
            'quantity' => $this->faker->biasedNumberBetween($min = 10, $max = 50, $function = 'sqrt'),
            'image' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
