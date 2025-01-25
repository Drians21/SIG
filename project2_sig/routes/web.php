<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get(
    '/', 
    [PetaController::class, 'welcome'])->name('welcome');
Route::get(
    '/peta_tematik', 
    [PetaController::class, 'index'])->name('peta_tematik');
Route::get(
    '/luas_wilayah', 
    [PetaController::class, 'luas_wilayah'])->name('luas_wilayah');
Route::get(
    '/jumlah_penduduk', 
    [PetaController::class, 'jumlah_penduduk'])->name('jumlah_penduduk');
Route::get(
    '/jumlah_kepala_keluarga', 
    [PetaController::class, 'jumlah_kepala_keluarga'])->name('jumlah_kepala_keluarga');
Route::get(
    '/jumlah_pendidikan_s1', 
    [PetaController::class, 'jumlah_pendidikan_s1'])->name('jumlah_pendidikan_s1');
Route::get(
    '/jumlah_guru', 
    [PetaController::class, 'jumlah_guru'])->name('jumlah_guru');