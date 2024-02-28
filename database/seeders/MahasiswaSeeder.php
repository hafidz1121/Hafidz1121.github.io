<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nim' => 'E41221749',
                'nama' => 'Hafidz Fadhillah',
                'prodi' => 'TIF',
                'alamat' => 'Jl. Nangka Kepuharjo',
                'no_telp' => '085156442649',
                'tgl_lahir' => now(),
                'created_at' => now()
            ],
            [
                'nim' => 'E41221567',
                'nama' => 'Adji Prasetyo',
                'prodi' => 'TIF',
                'alamat' => 'Jl. Manggis Majangan',
                'no_telp' => '085123456789',
                'tgl_lahir' => now(),
                'created_at' => now()
            ],
            [
                'nim' => 'E41221987',
                'nama' => 'Budiono Siregar',
                'prodi' => 'MIF',
                'alamat' => 'Jl. Kapal Terbang',
                'no_telp' => '081243218765',
                'tgl_lahir' => now(),
                'created_at' => now()
            ],
        ]);
    }
}
