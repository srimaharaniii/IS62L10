<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosenController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/home', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

// // Route::get('mahasiswa/{nama}', function ($nama) {
// //     echo "Ini Halaman Mahasiswa dengan Nama $nama";
// // });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "Hello World";
// });

// Route::get('/mahasiswa', function () {
//     $kelas = "IS63";
//     $data = ["Khalifah","Herdio","Badri","Raihan","Putri","Hanif"];

//     // return view('mahasiswa.index')->with('mhs',$data)->with('kls',$kelas);
//     return view('mahasiswa.index',compact('kelas','data'));
// });

// Route::get('/mahasiswa', function () {
//     $nama = "Herdio Saputra";
//     $nilai = -40;

//     $nilai2 = [85,70,50,70,35,100];

//     return view('mahasiswa',compact('nama','nilai','nilai2'));
// });

// Route::get('/', function () {
//     $data_mhs = ["Abdul","Adha","Aidil","Alif","Asfal"];
//     return view('layout.master',compact('data_mhs'));
// });

// Route::get('/mahasiswa', function () {
//     $data_mhs = ["Abdul","Adha","Aidil","Alif","Asfal"];
//     return view('data.mahasiswa',compact('data_mhs'));
// });

// Route::get('/dosen', function () {
//     $data_dos = ["Ismanuddin","Mustofa Lutfi","Rita Warni","Ridha Ansari","Dzulgunar M Nasir"];
//     return view('data.dosen',compact('data_dos'));
// });

// Route::get('/galeri', function () {
//     return view('data.galeri');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Data Dosen
Route::get('/dosen', [dosenController::class, 'index']);
Route::get('/dosen/tambah', [dosenController::class, 'create']);
Route::post('/dosen', [dosenController::class, 'store']);
Route::get('/dosen/edit/{id}', [dosenController::class, 'edit']);
Route::put('/dosen/{id}', [dosenController::class, 'update']);
Route::delete('/dosen/{id}', [dosenController::class, 'destroy']);
