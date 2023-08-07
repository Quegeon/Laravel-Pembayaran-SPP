<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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

# Dashboard Routes
Route::get('/', function () {
    return view('dashboard');
});

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