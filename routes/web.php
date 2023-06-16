<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TendikController;

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

// halaman awal (Dynamic Templating)
Route::get('/', [PortoController::class, 'home']);
Route::get('/about', [PortoController::class, 'about']);
Route::get('/blogs', [PortoController::class, 'blogs']);

// halaman Login & Register
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

// halaman dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('register');

// halaman data mahasiswa, tambah data, 
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy']);

// Fitur Search
Route::get('/mahasiswa/search', [MahasiswaController::class, 'search']);

// ONE TO ONE
Route::get('/mahasiswa/wali', [MahasiswaController::class, 'wali']);
// ONE TO MANY
Route::get('/mahasiswa/dosen', [MahasiswaController::class, 'dosen']);
// MANY TO MANY
Route::get('/mahasiswa/matkul', [MahasiswaController::class, 'matkul']);

// Pertemuan 12 (validasi & fitur upload file)
Route::get('/tendik', [TendikController::class, 'index']);
Route::get('/tendik/create', [TendikController::class, 'create']);
Route::post('/tendik/store', [TendikController::class, 'store']);
Route::get('/tendik/{id}/edit', [TendikController::class, 'edit']);
Route::post('/tendik/{id}/update', [TendikController::class, 'update']);
Route::get('/tendik/{id}/delete', [TendikController::class, 'destroy']);
