<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class EventFactory extends Factory
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
            'description' => fake()->paragraph(),
            'date_start' => fake()->date(),
            'date_end' => fake()->date(),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
            'type' => fake()->randomElement(['exam', 'holiday']),
        ];
    }
}
