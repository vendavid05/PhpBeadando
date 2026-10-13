<?php

namespace Database\Factories;

use App\Models\Airline;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => fake()->dateTimeBetween('now', '+1 year')
                            ->format('Y-m-d'),
            'airline_id' => Airline::factory(),
            'seat_limit' => fake()->numberBetween(80, 350),
        ];
    }
}
