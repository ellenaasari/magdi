<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DudiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// route dudi
Route::get('/dudi', [DudiController::class, 'index']);


Route::get('/dudi/tambah', [DudiController::class, 'tambah']);
Route::get('/dudi/input', [DudiController::class, 'input']);
Route::get('/dudi/edit/{id}', [DudiController::class, 'edit']);
Route::get('/dudi/update', [DudiController::class, 'update']);
Route::get('/dudi/hapus/{id}', [DudiController::class, 'hapus']);

//route guru

Route::get('/guru', [GuruController::class, 'index']);


Route::get('/guru/tambah', [GuruController::class, 'tambah']);
Route::get('/guru/input', [GuruController::class, 'input']);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
Route::get('/guru/update', [GuruController::class, 'update']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);


//route  absen

Route::get('/absen',[AbsenController::class,'index']);
Route::get('/absen/tambah',[AbsenController::class,'tambah']);
Route::post('/absen/simpan',[AbsenController::class,'simpan']);
Route::get('/absen/edit/{id}',[AbsenController::class,'edit']);
Route::get('/absen/delete/{id}',[AbsenController::class,'hapus']);
Route::post('/absen/update/{id}',[AbsenController::class,'update']);

//route siswa

Route::get('/siswa',[SiswaController::class,'index']);
Route::get('/siswa/tambah',[SiswaController::class,'tambahSiswa']);
Route::post('/siswa/simpan',[SiswaController::class,'simpanSiswa']);
Route::get('/siswa/edit/{nis}',[SiswaController::class,'editSiswa']);
Route::get('/siswa/delete/{nis}',[SiswaController::class,'hapusSiswa']);
Route::post('/siswa/update/{nis}',[SiswaController::class,'updateSiswa']);

//route laporan

//Route::get('/tampil',[LaporanController::class,'tampil']);
Route::get('/laporan',[LaporanController::class,'index']);
Route::get('/laporan/tambah',[LaporanController::class,'siswaTambah']);
Route::get('/laporan/tambah/proses',[LaporanController::class,'siswaTambahProses']);
Route::get('/laporan/edit/{id}',[LaporanController::class,'siswaUbah']);
Route::get('/laporan/delete/{id}',[LaporanController::class,'siswaHapus']);
Route::post('/laporan/update/{id}',[LaporanController::class,'siswaUpdate']);


//route nilai

Route::get('/nilai',[NilaiController::class,'index']);
Route::get('/nilai/tambah',[NilaiController::class,'tambah']);
Route::post('/nilai/tambah/proses',[NilaiController::class,'simpan']);
Route::get('/nilai/edit/{id}',[NilaiController::class,'edit']);
Route::get('/nilai/delete/{id}',[NilaiController::class,'hapus']);
Route::post('/nilai/update/{id}',[NilaiController::class,'update']);