<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaintFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'place_of_birth' => fake()->city(),
            'benedition' => fake()->dateTimeAD(),
            'Miracles' => fake()->numberBetween(2, 9),
        ];
    }
}