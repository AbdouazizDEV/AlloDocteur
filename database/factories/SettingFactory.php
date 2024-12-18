<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'website_name' => $this->faker->company . ' Clinique',
            'website_link' => $this->faker->url(),
            'image' => 'logo_' . $this->faker->numberBetween(1, 5) . '.png',
            'favicon' => 'favicon_' . $this->faker->numberBetween(1, 5) . '.ico',
            'copyright' => '© ' . date('Y') . ' ' . $this->faker->company . ' Tous droits réservés.',
            'email1' => $this->faker->companyEmail(),
            'email2' => $this->faker->companyEmail(),
            'fax' => $this->faker->phoneNumber(),
            'phone1' => $this->faker->phoneNumber(),
            'phone2' => $this->faker->phoneNumber(),
            'whatsapp' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}