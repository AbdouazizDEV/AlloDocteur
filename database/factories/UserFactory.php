<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        
        return [
            'name' => $this->faker->name($gender),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // mot de passe par défaut
            'remember_token' => Str::random(10),
            'age' => $this->faker->numberBetween(18, 80),
            'dob' => $this->faker->date(),
            'gender' => $gender,
            'phone' => $this->faker->phoneNumber(),
            'is_ban' => $this->faker->boolean(10), // 10% de chances d'être banni
            'role_as' => $this->faker->randomElement(['user', 'doctor', 'admin'])
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
