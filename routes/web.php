<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return 'Hallo Dunia Laravel';
// });

// Route::get('/profil', function () {
//     return '<h1>Profil Mahasiswa<h1>
//             <p>Selamat Datang<p>';
// });

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return 'Nama Mahasiswa : ' . $nama;
// });

// Route::get('/mahasiswadetail/{nim}/{nama}', function ($nama , $nim) {
//     return "NIM = $nim <br> Nama Mahasiswa :$nama";
// });

// Route::prefix('admin')->group(function() {
    
//     Route::get('/dashboard', fn() =>
//         'Admin Dashboard');

//     Route::get('/dosen', fn() =>
//         'Data Dosen');
// });

Route::get('/mahasiswa',[MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');

Route::get('/home', function () {
    return view ('Page.home');
});

Route::get('/profile', function () {
    return view ('Page.profile');
});

Route::get('/about', function () {
    return view ('Page.about');
});

Route::get('/contact', function () {
    return view ('Page.contact');
});

Route::get('/news', function () {
    return view ('Page.news');
});