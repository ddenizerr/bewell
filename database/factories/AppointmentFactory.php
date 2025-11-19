<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition(): array
    {
        $dateTime = $this->faker->dateTimeBetween('+1 day', '+1 month');

        return [
            'client_id' => Client::factory(),
            'date'      => $dateTime->format('Y-m-d'),
            'time'      => $dateTime->format('H:i:s'),
            'type'      => $this->faker->randomElement(['consultation', 'check-in', 'follow-up']),
            'status'    => 'scheduled',
            'notes'     => $this->faker->sentence(),
        ];
    }
}
