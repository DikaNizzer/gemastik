<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Bimbingan;
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


Route::get('/dashboard', [Bimbingan::class, 'bimbingan']);


// PAA
Route::get('/paa', [PaaController::class, 'index']);


// DOsen
Route::get('/dosen', [DosenController::class, 'index']);

// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);