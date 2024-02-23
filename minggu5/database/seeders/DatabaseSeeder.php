<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**s
     * Seed the application's database.
     */
    public function run(): void
    {    
        
       $this->call([
        VoterSeeder::class,
       ]);

    }
}
