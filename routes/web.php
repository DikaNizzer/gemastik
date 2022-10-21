<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Bimbingan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TugasAkhirController;
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

// HOME LIA
Route::get('/', [Home::class, 'home']);



// JOBDESK WAHYU CREATE DOSEN & MHS DONE
Route::get('/buat-akun-dosen', [PaaController::class, 'create']);
Route::post('/store-akun-dosen', [PaaController::class, 'store']);

Route::get('/buat-akun-mhs', [PaaController::class, 'createMhs']);
Route::post('/store-akun-mhs', [PaaController::class, 'storeMhs']);


//Tugas AKhir LIA MHS UPLOAD TA DONE
Route::get('/mahasiswa-ta', [TugasAkhirController::class, 'get_ta']);
Route::post('/upload-ta', [TugasAkhirController::class, 'create_ta']);




// CEK LOGIN PAA DIKA DONE
Route::post('/login-paa', [LoginController::class, 'authenticate']);
// PAA IF USER PASS TRUE DONE
Route::get('/paa', [PaaController::class, 'index']);
//LOGOUT DONE
Route::get('/logout-paa', [LoginController::class, 'logoutPaa']);

// CEK LOGIN DOSEN DIKA DONE
Route::post('/login-dosen', [LoginController::class, 'authenticateDosen']);
// Dosen IF USER PASS TRUE DONE
Route::get('/dosen', [DosenController::class, 'index']);
//LOGOUT DONE
Route::get('/logout-dosen', [LoginController::class, 'logoutDosen']);

// CEK LOGIN MAHASISWA DIKA DONE
Route::post('/login-mahasiswa', [LoginController::class, 'authenticateMahasiswa']);
// Dosen IF USER PASS TRUE DONE
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
//LOGOUT DONE
Route::get('/logout-mahasiswa', [LoginController::class, 'logoutmahasiswa']);


//Ambil  Data bimbingan GATAU PUNYA SIAPA
Route::get('/mahasiswa-bimbingan', [Bimbingan::class, 'get_bimbingan']);






