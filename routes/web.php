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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/fasilkom/anto', function () {
    echo '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
});

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return "Tampilkan data mahasiswa bernama $nama";
// });

Route::prefix('/admin')->group(function () {

     Route::get('/mahasiswa', function () {
     echo "<h1>Daftar Mahasiswa</h1>";
     });

    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan</h1>";
    });
});

// Route::get('/mahasiswa', function () {
//     return view('universitas.mahasiswa');
// });

// Route::get('/mahasiswa', function () {

//  $arrMahasiswa = [
//  "mahasiswa01" => "Risa Lestari",
//  "mahasiswa02" => "Rudi Hermawan",
//  "mahasiswa03" => "Bambang Kusumo",
//  "mahasiswa04" => "Lisa Permata"
//  ];

//  return view('universitas.mahasiswa', $arrMahasiswa);
//  });

Route::get('/mahasiswa/ilkom/kampusbaru', function () {
 $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
 "Lisa Permata"];

 return view('universitas.mahasiswa',['mahasiswa' => $arrMahasiswa]);
 });

