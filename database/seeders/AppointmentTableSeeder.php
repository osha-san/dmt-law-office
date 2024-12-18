<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentTableSeeder extends Seeder
{
    public function run()
    {
        Appointment::create([
            'title' => 'Consultation Meeting',
            'date' => now()->toDateString(),
            'time' => now()->toTimeString(),
            'location' => 'DMT Law Office',
            'status' => 'pending',
            'attorney' => 'John Doe',
            'client' => 'Jane Doe'
        ]);
    }
}
