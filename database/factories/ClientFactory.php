<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'first_name'          => $this->faker->firstName(),
            'last_name'           => $this->faker->lastName(),
            'email'               => $this->faker->unique()->safeEmail(),
            'phone'               => $this->faker->phoneNumber(),
            'date_of_birth'       => $this->faker->date(),
            'gender'              => $this->faker->randomElement(['male', 'female', 'other']),
            'height'              => $this->faker->randomFloat(2, 140, 200),
            'goal'                => $this->faker->sentence(),
            'medical_conditions'  => $this->faker->sentence(),
            'allergies'           => $this->faker->sentence(),
            'dietary_preferences' => $this->faker->sentence(),
            'activity_level'      => $this->faker->randomElement(['low', 'medium', 'high']),
            'status'              => 'active',
            'address'             => $this->faker->address(),
            'user_id'             => User::factory(),
        ];
    }
}
