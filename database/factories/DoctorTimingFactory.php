<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;

class DoctorTimingFactory extends Factory
{
    public function definition(): array
    {
        $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        $shifts = ['shift_1', 'shift_2'];

        return [
            'doctor_id' => Doctor::factory(),
            'day' => $this->faker->randomElement($days),
            'shift' => $this->faker->randomElement($shifts),
            'start_time' => $this->faker->time('H:i', '08:00'),
            'end_time' => $this->faker->time('H:i', '18:00'),
            'avg_consultation_time' => $this->faker->randomElement(['15 min', '20 min', '30 min'])
        ];
    }
}