<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Voter::factory(10)->create();
        \App\Models\Voter::factory()->create([
            'name'=> 'Test User',
            'email'=> 'test@example.com',
            'address'=> 'mastrip 103',
        ]);
    }
}
