<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\spp;

class sppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        spp::create([
            'tahun' => 2023,
            'nominal' => 150000,
        ]);
        spp::create([
            'tahun' => 2022,
            'nominal' => 125000,
        ]);
    }
}
