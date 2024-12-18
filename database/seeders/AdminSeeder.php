<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'email' => 'admin@gmail.com', // Replace control_number with email
            'password' => Hash::make('password123'), // Use Hash::make for secure passwords
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
