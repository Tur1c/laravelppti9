<?php

use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Redirect;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PageController::class, "index"]);
Route::get("/tampil", [PageController::class, "tampil"]);
Route::get("/tampildb", [PageController::class, "tampildb"]);
Route::get("/cobaFacade", [PageController::class, "cobaFacade"]);

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return "Nama Saya : $nama";
// });

Route::get('/mahasiswa/{mhs?}/{jur?}', function($mhs = "Agung", $jur = "Teknik Informatika") {
    return "Nama Saya : $mhs Jurusan : $jur";
});

Route::get('/user/{id}', function($id) {
    return "User ID : $id";
})->where('id', '[A-Z]{2}[0-9]+');

Route::get('/hubungi-kami', function() {
    return 'Hubungi Kami';
});

Route::redirect('/contact-us', '/hubungi-kami', 301);

// Route::get('/admin/mahasiswa', function() {
//     return "<h1>Halaman Admin Mahasiswa</h1>";
// });

// Route::get('/admin/dosen', function() {
//     return "<h1>Halaman Admin Dosen</h1>";
// });

// Route::get('/admin/karyawan', function() {
//     return "<h1>Halaman Admin Karyawan</h1>";
// });

Route::prefix('/admin')->group(function() {
    Route::get('/mahasiswa', function() {
        return "<h1>Halaman Admin Mahasiswa</h1>";
    });
    Route::get('/dosen', function() {
        return "<h1>Halaman Admin Dosen</h1>";
    });
    Route::get('/karyawan', function() {
        return "<h1>Halaman Admin Karyawan</h1>";
    });
});

Route::fallback(function() {
    return "<h1>Halaman Tidak Ditemukan</h1>";
});

Route::get('/mhs', function() {
    return Redirect()->route('mahasiswa_detail');
});

Route::get('/mahasiswa/detil/ti/ppti9', function() {
    return view('mahasiswa.detil');
})->name('mahasiswa_detail');

Route::get('/user/profile/{id}', function($id) {
    // $url = route('user_profile', ['id' => $id]);
    // return $url;
    return "ID dari halaman profile : $id";
})->name('user_profile');

Route::get('/profilemhs', function() {
    return view('universitas.profile');
})->name('profile');

Route::get('/mastermahasiswa', function() {
    $arrMhs = [
        "namaMhs1" => "Reinert Yosua Rumagit",
        "namaMhs2" => "Agung",
        "namaMhs3" => "Budi",
    ];
    $judul = "Data Mahasiswa";

    return view('universitas.mahasiswa', ['namaMhs' => $arrMhs]);
    // return view('universitas.mahasiswa')->with('namaMhs', $arrMhs)->with('judul', $judul);
    // return view('universitas.mahasiswa', compact('arrMhs', 'judul'));
});


