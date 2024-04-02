<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**s
     * Seed the application's database.
     */
    public function run(): void
    {    
        User::create([
            'name' => 'Patient Name',
            'email' => 'patient@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'patient',
        ]);
        

        User::create([
            'name' => 'Doctor Name',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'doctor',
        ]);

        User::create([
            'name' => 'Admin Name',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        
       $this->call([
        VoterSeeder::class,
       ]);

    }
}
