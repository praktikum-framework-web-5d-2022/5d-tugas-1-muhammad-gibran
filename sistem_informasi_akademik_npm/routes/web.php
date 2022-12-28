<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "Judul" => "Sistem Informasi Akademik NPM",
        "des" => "Apa yang kamu cari...?",
        "Dosen" => "Dosen",
        "Mahasiswa" => "Mahasiswa",
        "MataKuliah" => "Mata Kuliah",
        "DesDosen" => "Klik untuk melihat data dari dosen yang masih aktif di kampus",
        "DesMahasiswa" => "Klik untuk melihat data mahasiswa yang masih aktif di kampus",
        "DesMataKuliah" => "Klik untuk melihat Mata kuliah di tiap program studi kampus ini",
        "tentang" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!",
        "pembuat" => "Muhammad Gibran | Tugas Framework Pemrograman Web",
    ]);
});

Route::get('/Dosen', function () {
    $dosens = ["Samsul", "Ratna", "Santi", "Rini", "Adhi", "Arip", "Iqbal", "Rohan", "Oman", "Dadang"];
    return view('Dosen', [
        'dosens' => $dosens
    ]);
})->name('Dosen');

Route::get('/Mahasiswa', function () {
    $mahasiswas = ["Gibran", "Rio", "Fahmi", "Ray", "Fajar", "Luthfi", "Miftah", "Haris", "Heri", "Nurfatullah"];
    return view('Mahasiswa', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('Mahasiswa');

Route::get('/MataKuliah', function () {
    $matakuliahs = ["Framework Pemrograman Web", "Pemrograman berbasis web", "Pemrograman Berbasis Mobile", "Technopreneur", "Blockchain", "Cloud Computing", "Statistika dan Probabilitas", "Fisika Dasar", "Rekayasa Perangkat Lunak", "Bahasa Inggris"];
    return view('MataKuliah', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('MataKuliah');
