<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// route bisa=
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');

// Route::get('/create', 'KategoriArtikelController@create')->name('kategori.artikel.create');