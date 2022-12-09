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

Route::prefix('otp')->as('otp.')->group(function () {
    Route::get('/{otp:phone}', [\App\Http\Controllers\Auth\OtpController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Auth\OtpController::class, 'store'])->name('store');
    Route::post('/{otp}/resend', [\App\Http\Controllers\Auth\OtpController::class, 'resend'])->name('resend');
    Route::post('/{otp}/check', [\App\Http\Controllers\Auth\OtpController::class, 'check'])->name('check');
});

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('landing.index');

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->as('profile.')->group(function () {
        Route::get('/', [\App\Http\Controllers\ProfileController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\ProfileController::class, 'update'])->name('update');
    });

    Route::get('/voucher', [\App\Http\Controllers\VoucherController::class, 'index'])->name('voucher.index');

    Route::get('/pesanan', [\App\Http\Controllers\PesananController::class, 'index'])->name('pesanan.index');
    Route::get('/pemesanan', [\App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan.index');
});

Route::post('/register/otp', [\App\Http\Controllers\Auth\RegisterController::class, 'checkOtp'])->name('register.checkOtp');
Route::post('/login/otp', [\App\Http\Controllers\Auth\LoginController::class, 'checkOtp'])->name('login.checkOtp');
Auth::routes();
