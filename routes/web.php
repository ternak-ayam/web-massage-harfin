<?php

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

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('landing.index');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/pesanan', [\App\Http\Controllers\PesananController::class, 'index'])->name('pesanan.index');
Route::get('/pemesanan', [\App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan.index');
