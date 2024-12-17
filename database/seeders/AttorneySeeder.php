<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attorney;
use App\Models\User;

class AttorneySeeder extends Seeder
{
    public function run()
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'control_number' => 'AT123456', // Include the control_number field
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
