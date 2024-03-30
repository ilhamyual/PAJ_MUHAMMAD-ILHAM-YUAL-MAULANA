<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Telepon;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $telepon = [
            ['nomor_telepon' => '(+62) 878 0989 834', 'pengguna_id' => 1],
            ['nomor_telepon' => '(+62) 509 9868 0557', 'pengguna_id' => 2],
            ['nomor_telepon' => '023 9503 4379', 'pengguna_id' => 3],
            ['nomor_telepon' => '(+62) 24 1120 052', 'pengguna_id' => 4],
            ['nomor_telepon' => '0535 3676 2454', 'pengguna_id' => 5],
            ['nomor_telepon' => '0614 0945 4128', 'pengguna_id' => 6],
            ['nomor_telepon' => '0460 8541 5478', 'pengguna_id' => 7],
            ['nomor_telepon' => '(+62) 713 5497 976', 'pengguna_id' => 8],
            ['nomor_telepon' => '(+62) 653 4057 294', 'pengguna_id' => 9]
        ];

        foreach ($telepon as $item) {
            Telepon::create([
                'nomor_telepon' => $item['nomor_telepon'],
                'pengguna_id' => $item['pengguna_id'],
            ]);
        }
    }
}
