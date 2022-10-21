<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Bimbingan;
use App\Http\Controllers\TugasAkhirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [Home::class, 'home']);


//bimbingan
Route::get('/mahasiswa-bimbingan', [Bimbingan::class, 'get_bimbingan']);


// PAA
Route::get('/paa', [PaaController::class, 'index']);


// DOsen
Route::get('/dosen', [DosenController::class, 'index']);

// JOBDESK WAHYU
Route::get('/buat-akun-dosen', [PaaController::class, 'create']);
Route::post('/store-akun-dosen', [PaaController::class, 'store']);

// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);



//Tugas AKhir
Route::get('/mahasiswa-ta', [TugasAkhirController::class, 'get_ta']);
Route::post('/upload-ta', [TugasAkhirController::class, 'create_ta']);