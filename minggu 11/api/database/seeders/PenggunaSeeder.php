<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $pengguna=[
            [1, 'Padmi Kamila Hassanah S.Farm', null, null],
            [2, 'Julia Oktaviani', null, null],
            [3, 'Darmana Sitompul', null, null],
            [4, 'Naradi Nainggolan', null, null],
            [5, 'Tedi Winarno', null, null],
            [6, 'Ulya Yani Permata S.Pt', null, null],
            [7, 'Maida Uyainah', null, null],
            [8, 'Putri Dian Nasyidah M.Pd', null, null],
            [9, 'Lantar Uwais', null, null],
        ];
        foreach ($pengguna as $item) {
            Pengguna::create([
                'id' => $item[0],
                'nama' => $item[1],
            ]);
        }
    }
}
