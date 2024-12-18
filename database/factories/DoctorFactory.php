<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Department;

class DoctorFactory extends Factory
{
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $name = $this->faker->name($gender);
        $specializations = [
            'Chirurgie cardiaque', 
            'Neurochirurgie', 
            'Pédiatrie générale', 
            'Gynécologie obstétrique', 
            'Chirurgie orthopédique',
            'Oncologie médicale',
            'Psychiatrie clinique',
            'Dermatologie esthétique',
            'Urologie interventionnelle',
            'Endocrinologie métabolique'
        ];

        return [
            'user_id' => User::factory(),
            'department_id' => Department::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
            'gender' => $gender,
            'phone' => $this->faker->phoneNumber(),
            'designation' => $this->faker->jobTitle(),
            'qualification' => $this->faker->randomElement([
                'Doctorat en Médecine', 
                'Master en Chirurgie', 
                'Spécialisation en ' . $this->faker->randomElement($specializations)
            ]),
            'experience' => $this->faker->numberBetween(1, 30) . ' ans',
            'specialization' => $this->faker->randomElement($specializations),
            'bio' => $this->faker->paragraph(),
            'consulation_fees' => $this->faker->numberBetween(50, 300) . ' €',
            'address' => $this->faker->address(),
            'image' => 'doctor_' . $this->faker->numberBetween(1, 20) . '.jpg',
            'is_active' => $this->faker->boolean(90) // 90% de chances d'être actif
        ];
    }
}