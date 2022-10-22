<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BimbinganController;
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
//Ambil  Data bimbingan DARI DOSEN DIKA DONE
Route::get('/anak-wali', [DosenController::class, 'getMahasiswa']);
// AMBIL DATA TA MHS
Route::get('/pengajuan-ta', [DosenController::class, 'getTA']);
// UBAH STATUS TA DARI DOSEN
Route::get('/ubah-status/{idta}/{status}', [DosenController::class, 'updateStatus']);

//Ambil  Data bimbingan PUNYA LIA
Route::get('/mahasiswa-bimbingan', [BimbinganController::class, 'get_bimbingan']);
// Input Data Bimbingan
Route::post('/upload-bimbingan', [MahasiswaController::class, 'createBimbingan']);
//Ambil  Data Sidang
Route::get('/ajukan-sidang', [MahasiswaController::class, 'getSidang']);
// Update kekurangan data ta untuk sidang
Route::post('/update-ta', [MahasiswaController::class, 'updateTa']);

//Ambil Data Ta yang disetujui
Route::get('/ta-acc', [DosenController::class, 'taAcc']);

//Ambil Data Ta yang maju sidang di PAA
Route::get('/paa-sidang', [PaaController::class, 'getSidang']);
// Input Data sidang
Route::post('/create-jadwal', [PaaController::class, 'createJadwal']);
//Ambil Data Jadwal sidang di PAA
Route::get('/paa-jadwal', [PaaController::class, 'getJadwal']);





