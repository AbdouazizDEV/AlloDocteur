<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DepartmentFactory extends Factory
{
    public function definition(): array
    {
        $departmentName = $this->faker->words(2, true) . ' ' . $this->faker->randomElement([
            'Cardiologie', 
            'Neurologie', 
            'Pédiatrie', 
            'Gynécologie', 
            'Orthopédie', 
            'Oncologie', 
            'Psychiatrie', 
            'Dermatologie',
            'Urologie',
            'Endocrinologie'
        ]);

        return [
            'name' => $departmentName,
            'slug' => Str::slug($departmentName),
            'image' => 'department_' . $this->faker->numberBetween(1, 10) . '.jpg',
            'is_active' => $this->faker->boolean(90) // 90% de chances d'être actif
        ];
    }
}