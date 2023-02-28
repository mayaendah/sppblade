<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswa::create([
            'nisn' => '1111111111',
            'nis' => '222222222',
            'nama' => 'cite',
            'id_kelas' => '1',
            'alamat' => 'cijambe',
            'no_tlp' => '0987654321',
            'id_spp' => '1',
        ]);
        siswa::create([
            'nisn' => '0909090909',
            'nis' => '0202020202',
            'nama' => 'dean',
            'id_kelas' => '2',
            'alamat' => 'girimekar',
            'no_tlp' => '0987612345',
            'id_spp' => '2',
        ]);
    }
}
