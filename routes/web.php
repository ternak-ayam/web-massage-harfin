<?php

use App\Models\AdditionalService;
use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

    Route::get('/pesanan/detail/{order:order_id}', [\App\Http\Controllers\PemesananController::class, 'show'])->name('pemesanan.show');
    Route::get('/pesanan/success/{order:order_id}', [\App\Http\Controllers\PesananController::class, 'success'])->name('pesanan.success');
    Route::get('/pesanan/{service:slug}', [\App\Http\Controllers\PesananController::class, 'show'])->name('pesanan.show');
    Route::get('/pesanan/{order:order_id}/cancel', [\App\Http\Controllers\PesananController::class, 'cancel'])->name('pesanan.cancel');
    Route::get('/pesanan/{order}/done', [\App\Http\Controllers\PesananController::class, 'done'])->name('pesanan.done');
    Route::post('/pesanan', [\App\Http\Controllers\PesananController::class, 'store'])->name('pesanan.store');
    Route::post('/xendit/payment/handle', [\App\Http\Controllers\PesananController::class, 'handleXendit'])->name('payment.handle.notification');

    Route::post('/donation/pay', [\App\Http\Controllers\DonationController::class, 'pay'])->name('donation.pay');

    Route::get('/pemesanan', [\App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan.index');
});

Route::post('/register/otp', [\App\Http\Controllers\Auth\RegisterController::class, 'checkOtp'])->name('register.checkOtp');
Route::post('/login/otp', [\App\Http\Controllers\Auth\LoginController::class, 'checkOtp'])->name('login.checkOtp');

Auth::routes();
