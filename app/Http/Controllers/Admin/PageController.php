<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Mahasiswa;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tampildb() {
        $mhs = new Mahasiswa;
        $mhs->nim = "123456";
        $mhs->nama_lengkap = "Agung Budiono";
        $mhs->tempat_lahir = "Jakarta";
        $mhs->tanggal_lahir = "1990-01-01";
        $mhs->alamat = "Jl. Kebon Jeruk";
        $mhs->fakultas = "SoCS";
        $mhs->jurusan = "Computer Science";
        $mhs->save();
        dump($mhs);
    }

    public function tampil() {
        $judul = "Data Mahasiswa";
        $arrayMhs = ["Andi", "Agung", "Budi", "Charlie"];

        return view("universitas.mahasiswa")->with('judul', $judul)->with('arrayMhs', $arrayMhs);
    }

    public function cobaFacade()
    {
        echo Str::snake("Ppti9SedangBelajarLaravel8");
        echo "<br>";
        echo Str::kebab("Ppti9SedangBelajarLaravel8");
    }
}
