<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        Appointment::create([
            'type' => 'Consultation',
            'client_name' => 'John Doe',
            'time' => '08:00:00',
            'location' => 'DMT Law Office',
        ]);

        Appointment::create([
            'type' => 'Meeting',
            'client_name' => 'Jane Smith',
            'time' => '10:00:00',
            'location' => 'Online via Zoom',
        ]);
    }
}
