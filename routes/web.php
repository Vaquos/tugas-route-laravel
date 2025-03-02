<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('submit', function () {
    return 'form submitted!!!';
});

Route::put('update/{id}', function ($id) {
    return 'update data for id: ' . $id;
});

Route::delete('delete/{id}', function ($id) {
    return 'delete data for id: ' . $id;
});

Route::get('mahasiswa/ti/furqon', function () {
    return view('mahasiswa', ['title' => 'Mahasiswa']);
});

Route::get('mahasiswa/{nama}', function ($nama) {
    return view('nama-mahasiswa', ['title' => $nama, 'nama' => $nama]);
});


Route::get('hitungusia/{nama}/{tahunlahir}', function ($nama, $tahun_lahir) {
    $usia = date('Y') - $tahun_lahir;
    return view('hitung-usia', ['title' => 'Hitung Usia', 'nama' => $nama, 'usia' => $usia]);
});
Route::get('mahasiswa/{nama?}', function ($nama = 'tidak ada') {
    return view('nama-mahasiswa', ['title' => $nama, 'nama' => $nama]);
});


Route::get('hitungusia/{nama?}/{tahunlahir?}', function ($nama = "tidak ada", $tahun_lahir = "2025") {
    $usia = date('Y') - $tahun_lahir;
    return view('hitung-usia', ['title' => 'Hitung Usia', 'nama' => $nama, 'usia' => $usia]);
});

Route::get('user/{id}', function ($id) {
    return view('user', ['user' => $id]);
})->where('id', '[0-9]+');

Route::redirect('public', 'mahasiswa');

Route::prefix('login')->group(function () {
    route::get('mahasiswa', function () {
        return view('login', ['user' => 'mahasiswa']);
    });
    route::get('dosen', function () {
        return view('login', ['user' => 'dosen']);
    });
    route::get('admin', function () {
        return view('login', ['user' => 'admin']);
    });
});

Route::fallback(function () {
    return view('404');
});
