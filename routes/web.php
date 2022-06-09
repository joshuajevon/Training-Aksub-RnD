<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Models\Barang;
use App\Models\Kategori;
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


Route::get('/add', [BarangController::class, 'add'])->name('add');

Route::post('/add-barang', [BarangController::class, 'addbarang'])->name('addbarang');

Route::get('/add-kategori', [BarangController::class, 'addkategori'])->name('addkategori');

Route::post('/kategori', [BarangController::class, 'kategori'])->name('kategori');

Route::get('/', [BarangController::class, 'view'])->name('view');

Route::get('/edit/{id}/barang', [BarangController::class, 'editbarang'])->name('editbarang');

Route::patch('/update/{id}/barang', [BarangController::class, 'updatebarang'])->name('updatebarang');

Route::delete('/delete/{id}/barang', [BarangController::class, 'deletebarang'])->name('deletebarang');

Route::get('/cari', [BarangController::class, 'cari'])->name('cari');
