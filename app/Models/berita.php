<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
       private static $data_berita = [
        [
            "judul" => "Berita BMW Menabrak",
            "slug" => "berita-bmw-menabrak",
            "penulis" => "Christiano Tarigan",
            "konten" => "Berita utama terkait BMW baru-baru ini berfokus pada kecelakaan yang melibatkan mobil BMW di Yogyakarta pada Mei 2025, di mana pengemudi bernama Christiano Tarigan ditetapkan sebagai tersangka setelah menabrak seorang mahasiswa hingga tewas, dan kejadian ini juga dikaitkan dengan dugaan penggantian plat nomor mobil. Selain itu, ada juga berita mengenai pembaruan teknologi dan fitur pada jajaran model BMW yang akan diluncurkan pada musim panas 2025, serta pembaruan pada SUV listrik BMW iX untuk model tahun 2026. ",
        ],
            [
                "judul" => "Kontrakan Mulet",
                "slug" => "kontrakan-mulet",
                "penulis" => "Urbun DKK",
                "konten" => "omaygatt tempat yang sangat nyaman dan tepat untuk bersenang senang, terdapat banyak flora fauna di dalamnya wajib berkunjung sihh, look like mini zoo,penghuninya baik dan mirip binatang, juga ada fans vardrid yang bangga2in 15 ucl padahal gapernah treble apalagi sixtuple",
                 
            ],
                 [
                    "judul" => "Unimus Tapak Suci Juara Satu",
                    "slug" => "unimus-tapak-suci-juara-satu",
                    "penulis" => "ORTOM TAPAK SUCI",
                    "konten" => "Semarang – Unit Kegiatan Mahasiswa (UKM) Tapak Suci Universitas Muhammadiyah Semarang (UNIMUS) kembali menorehkan prestasi gemilang di ajang Kejuaraan Internasional Moslem Pencak Silat. Alhamdulillah, UKM berhasil meraih hasil maksimal dengan menyabet gelar Juara Umum 1 Tingkat Dewasa serta predikat Pesilat Terbaik Putri. Dalam kejuaraan bergengsi tersebut, para atlet silat UNIMUS berhasil membawa pulang total 13 medali, terdiri dari 6 medali emas, 2 medali perak, dan 5 medali perunggu.
                     Berikut daftar perolehan medali:
                    🥇 Emas
                    1. Mohammad Fajar Firdaus (Seni Tunggal Putra) – S1 Ilmu Keolahragaan
                    2. Fatimah Azzahra (Tanding Under A Putri) – Informatika
                    3. Deswana Pratama Siwi (Tanding A Putri) – S1 Ilmu Keolahragaan (+ Pesilat Terbaik Putri Kategori Dewasa)
                    4. Tegar Haekal Achmad Dlukha (Tanding C Putra) – D4 Teknologi Laboratorium Medis
                    5. Marchsya Keira Agichi Mufidah (Tanding C Putri) – Teknologi Pangan
                    6. Talitha Tsaqif Arkana (Tanding E Putri) – Informatika
                    🥈 Perak
                    1.Indahu Zulfaa Urbun (Tanding A Putra) – S1 Ilmu Kelautan
                    2. Dziko Husnu Syakir (Tanding B Putra) – S1 Ilmu Keolahragaan",
                ],
    ];

    public static function ambildata()
    {
        return Self::$data_berita;

    }

    public static function caridata($slugp)
    {
        $data_beritas = self::$data_berita;

           $new_berita = [];

    foreach($data_beritas as $berita)
    {
        if($berita["slug"] === $slugp)
        {
            $new_berita = $berita;
        }
    }

    return $new_berita;

    }

}
