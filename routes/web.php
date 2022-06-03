<?php

use App\Http\Controllers\BarangController;
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

Route::post('/add-book', [BarangController::class, 'addbook'])->name('addbook');

Route::get('/', [BarangController::class, 'view'])->name('view');
