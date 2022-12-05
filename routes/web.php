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

Route::get('send-wa', function (\App\Models\Otp $phone) {
    $phone->notify(new \App\Notifications\SendOtpWhatsappNotification($phone));
});

Route::get('/otp/{otp:phone}', [\App\Http\Controllers\Auth\OtpController::class, 'index'])->name('otp.index');
Route::post('/otp', [\App\Http\Controllers\Auth\OtpController::class, 'store'])->name('otp.store');
Route::post('/otp/{otp}/resend', [\App\Http\Controllers\Auth\OtpController::class, 'resend'])->name('otp.resend');
Route::post('/otp/{otp}/check', [\App\Http\Controllers\Auth\OtpController::class, 'check'])->name('otp.check');

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('landing.index');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::get('/pesanan', [\App\Http\Controllers\PesananController::class, 'index'])->name('pesanan.index');
Route::get('/pemesanan', [\App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan.index');

Auth::routes();
