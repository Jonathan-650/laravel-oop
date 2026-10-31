<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'name' => fake()->name(),
            'location' => fake()->address(),
            'description' => fake()->paragraph(),
            'capacity' => fake()->mt_rand(),
            'status' => fake()->randomElement(['operational', 'maintenance', 'quarantine']),
            'note' => fake()->paragraph(), 
        ];
    }
}
