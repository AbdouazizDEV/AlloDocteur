<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Doctor;
use App\Enums\AppointmentStatusEnum;

class AppointmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'doctor_id' => Doctor::factory(),
            'appointment_number' => 'APT-' . $this->faker->unique()->numberBetween(1000, 9999),
            'appointment_date' => $this->faker->dateTimeBetween('+1 week', '+3 months')->format('Y-m-d'),
            'appointment_time' => $this->faker->time('H:i'),
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'consulation_fees' => $this->faker->numberBetween(50, 300) . ' €',
            'consulation_fees_status' => $this->faker->randomElement(['paid', 'pending']),
            'user_comment' => $this->faker->optional()->sentence(),
            'doctor_comment' => $this->faker->optional()->sentence(),
            'status' => $this->faker->randomElement([
                AppointmentStatusEnum::Booked,
                AppointmentStatusEnum::Completed,
                AppointmentStatusEnum::Cancel,
                AppointmentStatusEnum::NotAvailable
            ])
        ];
    }
}