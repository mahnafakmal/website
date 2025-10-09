<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "isi" => "Pada September 2020, BMW memperkenalkan BMW M4 generasi kedua. Ini berkembang 
                  jauh dibandingkan pendahulunya dengan mengadopsi gril baru. Seperti generasi sebelumnya, 
                  mobil ini dilengkapi dengan 6 silinder segaris turbocharged 3 liter. Ini mengembangkan 480
                  tenaga kuda dan hingga 510 tenaga kuda dalam versi kompetisinya. BMW menawarkan gearbox 
                  manual 6 kecepatan atau otomatis 8 kecepatan (konverter torsi). Untuk pertama kalinya di M4,
                  BMW memperkenalkan versi penggerak 4 roda.
                  Disebut M Xdrive, penggerak semua roda ini memungkinkan adanya tenaga penggerak.",
        "img1" => "img/bmw.jpeg"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Fadut budi", 
        "nohp" => "0874562710",
        "img" => "img/contoh.jpg"
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Berita 1",
            "penulis" => "Budi",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis debitis 
                            et, optio perspiciatis totam distinctio nam, nesciunt iusto reprehe
                        nderit inventore dignissimos, nulla voluptatem 
                        xcepturi! Earum, natus soluta! Itaque, assumenda nihil!",
        ],
            [
                "judul" => "berita 2",
                "penulis" => "Budi",
                "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis debitis 
                            et, optio perspiciatis totam distinctio nam, nesciunt iusto reprehe
                            nderit inventore dignissimos, nulla voluptatem 
                            xcepturi! Earum, natus soluta! Itaque, assumenda nihil!",
            ],
                 [
                    "judul" => "Berita 3",
                    "penulis" => "Budi",
                    "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis debitis 
                                et, optio perspiciatis totam distinctio nam, nesciunt iusto reprehe
                                nderit inventore dignissimos, nulla voluptatem 
                                xcepturi! Earum, natus soluta! Itaque, assumenda nihil!",
                ],
    ];

    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});

