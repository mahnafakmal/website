<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nama' => "Kafalah budi",
            'nim' => 12241510011,
            'prodi' => "Teknologi Informasi",
            'email' => "kafalah.com",
            'nohp' => 6219273917301,
        ]);
    }
}
