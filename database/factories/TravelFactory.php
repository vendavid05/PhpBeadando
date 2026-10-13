<?php

namespace Database\Factories;

use App\Models\Flight;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'flight_id' => Flight::factory(),
            'user_id' => User::factory(),
            'evaluation' => fake()->randomElement([
                '1',
                '2',
                '4',
                '3',])
        ];
    }
}
