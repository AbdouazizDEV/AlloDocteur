<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\DoctorTiming;
use App\Models\Appointment;
use App\Models\Setting;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Créer des utilisateurs
        User::factory(50)->create();

        // Créer des départements
        $departments = Department::factory(10)->create();

        // Créer des médecins liés aux départements
        $doctors = Doctor::factory(30)->make()->each(function ($doctor) use ($departments) {
            $doctor->department_id = $departments->random()->id;
            $doctor->save();
        });

        // Créer des horaires pour chaque médecin
        DoctorTiming::factory(100)->make()->each(function ($timing) use ($doctors) {
            $timing->doctor_id = $doctors->random()->id;
            $timing->save();
        });

        // Créer des rendez-vous
        Appointment::factory(200)->make()->each(function ($appointment) use ($doctors) {
            $appointment->doctor_id = $doctors->random()->id;
            $appointment->save();
        });

        // Créer des paramètres de site
        Setting::factory(3)->create();
    }
}
