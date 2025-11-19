<?php

namespace Database\Factories;

use App\Models\Meal;
use App\Models\NutritionPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    protected $model = Meal::class;

    public function definition(): array
    {
        return [
            'nutrition_plan_id' => NutritionPlan::factory(),
            'day'               => $this->faker->numberBetween(1, 7),
            'meal_type'         => $this->faker->randomElement(['breakfast', 'lunch', 'dinner', 'snack']),
            'meal_name'         => $this->faker->sentence(3),
            'calories'          => $this->faker->numberBetween(200, 800),
            'protein'           => $this->faker->randomFloat(2, 5, 60),
            'carbs'             => $this->faker->randomFloat(2, 5, 100),
            'fat'               => $this->faker->randomFloat(2, 1, 40),
            'description'       => $this->faker->sentence(),
        ];
    }
}
