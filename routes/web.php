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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cth', function () {
//     return view('contoh');
// });

// # halaman untuk yang tidak di pakai
// Route::fallback(function () {
//     return view('notfound');
// });

// #halaman panggil nama
// Route::get('mahasiswa/{nama}', function ($nama) {
//     echo "Ini Halaman Masiswa dengan nama $nama";
// });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "Hello Word";
// });

Route::get('mahasiswa',function (){
    $kelas = "IS63";
    $data = ["Herdio","Rani","Putri","Erik"];

    //with untuk mengubah nama
    // return view('mahasiswa.index')->with('mhs',$data) ->with ('kls',$kelas);
    
    //compact untuk memanggil langsung variabel nya
    return view ('mahasiswa.index',compact('kelas','data'));
});

