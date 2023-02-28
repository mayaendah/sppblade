<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelas;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kelas::create([
            'nama_kelas' => 'XII RPL',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',

        ]);
        kelas::create([
            'nama_kelas' => 'XI RPL',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',

        ]);
        kelas::create([
            'nama_kelas' => 'X RPL',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',

        ]);
    }
}
