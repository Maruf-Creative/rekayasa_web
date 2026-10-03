<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nim'      => '251011700592',
                'nama'     => 'Muhammad Maruf Tegar Saputra',
                'jk'       => 'L',
                'prodi'    => 'Sistem Informasi',
                'no_telp'  => '081574215249',
                'alamat'   => 'Jl. H. Kabun',
                'created_at' => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
