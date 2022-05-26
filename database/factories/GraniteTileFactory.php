<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GraniteTile>
 */
class GraniteTileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'length' => $this->faker->randomElement([20, 60, 80, 100]),
            'width' => $this->faker->randomElement([20, 60, 80, 100]),
            'amount' => $this->faker->randomElement([4, 8, 15, 20, 25]),
            'price' => $this->faker->numberBetween(10000, 500000),
            'website' => $this->faker->url(),
        ];
    }
}
