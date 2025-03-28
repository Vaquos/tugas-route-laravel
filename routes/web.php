<?php

use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\DosenpnpController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TeknisiController;
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

Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/listmahasiswa', function () {
//     $mahasiswa = [
//         'Furqon',
//         'Aldio',
//         'Agel',
//         'Erland',
//     ];
//     return view('akademik.mahasiswa', ['mahasiswa' => $mahasiswa]);
// });


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

Route::get('/listmahasiswa', function () {
    $mhs1 = 'Furqon';
    $mhs2 = 'Dio';
    $mhs3 = 'Erland';

    return view('akademik.mahasiswalist', compact('mhs1', 'mhs2', 'mhs3'));
});

Route::get('/nilaimahasiswa', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = '999999';

    return view('akademik.nilaimahasiswa', compact('nama', 'nim', 'total_nilai'));
});
Route::get('/nilaimahasiswaswitch', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = '99';

    return view('akademik.nilaimahasiswaswitch', compact('nama', 'nim', 'total_nilai'));
});
Route::get('/nilaimahasiswaforloop', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = '99';

    return view('akademik.nilaimahasiswaforloop', compact('nama', 'nim', 'total_nilai'));
});

Route::get('/nilaimahasiswawhile', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = '3';

    return view('akademik.nilaimahasiswawhile', compact('nama', 'nim', 'total_nilai'));
});
Route::get('/nilaimahasiswadowhile', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = '3';

    return view('akademik.nilaimahasiswadowhile', compact('nama', 'nim', 'total_nilai'));
});

Route::get('/nilaimahasiswaforeach', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = [23, 50, 80, 90];

    return view('akademik.nilaimahasiswaforeach', compact('nama', 'nim', 'total_nilai'));
});
Route::get('/nilaimahasiswaforelse', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = [23, 50, 80, 90];

    return view('akademik.nilaimahasiswaforelse', compact('nama', 'nim', 'total_nilai'));
});
Route::get('/nilaimahasiswacontinuebreak', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = [23, 50, 80, 90];

    return view('akademik.nilaimahasiswacontinuebreak', compact('nama', 'nim', 'total_nilai'));
});
Route::get('/nilaimahasiswacontinuebreak2', function () {
    $nama = 'Furqon';
    $nim = '2311082018';
    $total_nilai = [23, 50, 80, 90];

    return view('akademik.nilaimahasiswacontinuebreak2', compact('nama', 'nim', 'total_nilai'));
});

Route::get('/mahasiswati', function () {
    $arrmhs = ['furqon', 'dio', 'erland'];
    return view('akademik/mahasiswapnp', ['mhs' => $arrmhs]);
});

Route::get('/dosenti', function () {
    $arrdsn = ['dosen web framework', 'dosen microservice', 'dosen mobile programming', 'dosen web programming', 'dosen multimedia', 'dosen IOT'];
    return view('akademik/dosenpnp', ['dsn' => $arrdsn]);
});

Route::get('/prodi', function () {
    // $arrdsn = ['dosen web framework', 'dosen microservice', 'dosen mobile programming', 'dosen web programming', 'dosen multimedia', 'dosen IOT'];
    return view('akademik/prodipnp');
});

Route::get("/pnp/{jurusan}/{prodi}", function ($jurusan, $prodi) {
    $data = [$jurusan, $prodi];
    return view("akademikTi.prodiPnp")->with('data', $data);
})->name('prodi');


Route::get('insert-sql', [MahasiswaController::class, 'insertSql']);
Route::get('insert-prepared', [MahasiswaController::class, 'insertPrepared']);
Route::get('insert-binding', [MahasiswaController::class, 'insertBinding']);
Route::get('update', [MahasiswaController::class, 'update']);
Route::get('delete', [MahasiswaController::class, 'delete']);
Route::get('select', [MahasiswaController::class, 'select']);
Route::get('select-view', [MahasiswaController::class, 'selectView']);
Route::get('select-where', [MahasiswaController::class, 'selectWhere']);
Route::get('statement', [MahasiswaController::class, 'statement']);


Route::get('dosen', [DosenpnpController::class, 'index'])->name('dosens.index');
Route::get('dosen/create', [DosenpnpController::class, 'create'])->name('dosens.create');
Route::post('dosen', [DosenpnpController::class, 'store'])->name('dosens.store');
Route::get('dosen/{id}/edit', [DosenpnpController::class, 'edit'])->name('dosens.edit');
Route::put('dosen/{id}', [DosenpnpController::class, 'update'])->name('dosens.update');
Route::delete('dosen/{id}', [DosenpnpController::class, 'destroy'])->name('dosens.destroy');


Route::get('teknisi', [TeknisiController::class, 'index'])->name('teknisi.index');
Route::get('teknisi/create', [TeknisiController::class, 'create'])->name('teknisi.create');
Route::post('teknisi', [TeknisiController::class, 'store'])->name('teknisi.store');
Route::get('teknisi/{id}/edit', [TeknisiController::class, 'edit'])->name('teknisi.edit');
Route::put('teknisi/{id}', [TeknisiController::class, 'update'])->name('teknisi.update');
Route::delete('teknisi/{id}', [TeknisiController::class, 'destroy'])->name('teknisi.destroy');