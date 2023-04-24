<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class,'index'])->name('mahasiswa');

Route::get('/tambahdata', [MahasiswaController::class,'tambahdata'])->name('tambahdata');
Route::post('/insert', [MahasiswaController::class,'insert'])->name('insert');

Route::get('/tampil/{id}', [MahasiswaController::class,'tampil'])->name('tampil');
Route::post('/editdata/{id}', [MahasiswaController::class,'editdata'])->name('editdata');

Route::get('/delete/{id}', [MahasiswaController::class,'delete'])->name('delete');