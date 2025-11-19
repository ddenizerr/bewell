<?php

namespace Database\Factories;

use App\Models\NutritionPlan;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class NutritionPlanFactory extends Factory
{
    protected $model = NutritionPlan::class;

    public function definition(): array
    {
        $start = $this->faker->dateTimeBetween('-1 month', '+1 month');

        return [
            'client_id'      => Client::factory(),
            'name'           => $this->faker->sentence(3),
            'start_date'     => $start,
            'end_date'       => (clone $start)->modify('+2 weeks'),
            'daily_calories' => $this->faker->numberBetween(1500, 2800),
            'status'         => 'active',
            'notes'          => $this->faker->sentence(),
        ];
    }
}
