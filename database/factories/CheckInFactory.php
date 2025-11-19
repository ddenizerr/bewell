<?php

namespace Database\Factories;

use App\Models\CheckIn;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckInFactory extends Factory
{
    protected $model = CheckIn::class;

    public function definition(): array
    {
        return [
            'client_id'     => Client::factory(),
            'date'          => $this->faker->date(),
            'weight'        => $this->faker->randomFloat(2, 50, 120),
            'notes'         => $this->faker->sentence(),
            'mood'          => $this->faker->randomElement(['low','neutral','good','great']),
            'energy_level'  => $this->faker->randomElement(['low','medium','high']),
            'measurements'  => ['waist' => 75, 'hips' => 95],
            'photos'        => ['front' => 'photos/front.jpg'],
        ];
    }
}
