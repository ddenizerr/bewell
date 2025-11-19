<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    public function definition(): array
    {
        return [
            'first_name'          => $this->faker->firstName(),
            'last_name'           => $this->faker->lastName(),
            'email'               => $this->faker->unique()->safeEmail(),
            'phone'               => $this->faker->phoneNumber(),
            'date_of_birth'       => $this->faker->date(),
            'gender'              => $this->faker->randomElement(['male','female','other']),
            'height'              => $this->faker->randomFloat(2, 140, 200),
            'goal'                => $this->faker->sentence(),
            'medical_conditions'  => $this->faker->sentence(),
            'allergies'           => $this->faker->sentence(),
            'dietary_preferences' => $this->faker->sentence(),
            'activity_level'      => $this->faker->randomElement(['low', 'medium', 'high']),
            'notes'               => $this->faker->sentence(),
            'status'              => 'pending',
        ];
    }
}
