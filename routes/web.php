<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\UserController;
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

# Login Routes
Route::get('/',[LoginController::class,'index']);
Route::post('/postlogin',[LoginController::class,'postlogin']);
Route::get('/logout', [LoginController::class,'logout']);

# Dashboard Routes
Route::get('/dashboard', [DashboardController::class,'index']);

# Users Routes
Route::get('/user', [UserController::class,'index']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/store', [UserController::class,'store']);
Route::get('/user/{id}/show', [UserController::class,'show']);
Route::post('/user/{id}/update', [UserController::class,'update']);
Route::get('/user/{id}/destroy', [UserController::class,'destroy']);
Route::get('/user/{id}/show-pwd', [UserController::class,'show_pwd']);
Route::post('/user/{id}/chpwd', [UserController::class,'chpwd']);

# Kelas Routes
Route::get('/kelas', [KelasController::class,'index']);
Route::get('/kelas/create', [KelasController::class,'create']);
Route::post('/kelas/store', [KelasController::class,'store']);
Route::get('/kelas/{id}/show', [KelasController::class,'show']);
Route::post('/kelas/{id}/update', [KelasController::class,'update']);
Route::get('/kelas/{id}/destroy', [KelasController::class,'destroy']);

# Siswa Routes
Route::get('/siswa', [SiswaController::class,'index']);
Route::get('/siswa/create', [SiswaController::class,'create']);
Route::post('/siswa/store', [SiswaController::class,'store']);
Route::get('/siswa/{nis}/show', [SiswaController::class,'show']);
Route::post('/siswa/{nis}/update', [SiswaController::class,'update']);
Route::get('/siswa/{nis}/destroy', [SiswaController::class,'destroy']);

# SPP Routes
Route::get('/spp', [SPPController::class,'index']);
Route::get('/spp/create', [SPPController::class,'create']);
Route::post('/spp/store', [SPPController::class,'store']);
Route::get('/spp/{id}/show', [SPPController::class,'show']);
Route::post('/spp/{id}/update', [SPPController::class,'update']);
Route::get('/spp/{id}/destroy', [SPPController::class,'destroy']);

# Pembayaran Routes
Route::get('/pembayaran', [PembayaranController::class,'index']);
Route::get('/pembayaran/create', [PembayaranController::class,'create']);
Route::post('/pembayaran/store', [PembayaranController::class,'store']);    
Route::get('/pembayaran/{id}/show', [PembayaranController::class,'show']);
Route::post('/pembayaran/{id}/update', [PembayaranController::class,'update']);
Route::get('/pembayaran/{id}/destroy', [PembayaranController::class,'destroy']);
Route::get('/pembayaran/print', [PembayaranController::class,'print']);
Route::get('/pembayaran/{id}/receipt', [PembayaranController::class,'receipt']);