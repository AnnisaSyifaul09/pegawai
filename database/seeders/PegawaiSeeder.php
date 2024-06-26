<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pegawai;


class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Shintya',
            'alamat' => 'Gentan, Solo Baru',
        ]);

        Pegawai::factory()
            ->count(10)
            ->create();
    }
}
