<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factory>
 */
class PokedexFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => '123',
            'name' => $this->faker->unique()->name(),
            'type' => Str::random(10),
            'description' => $this->faker->sentence(10),
            'weight' => 30.5,
            'height' => 100.9,
        ];
    }
}
