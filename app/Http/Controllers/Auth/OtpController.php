<?php

namespace App\Http\Controllers\Auth;

use App\Events\WhatsappEvent;
use App\Http\Controllers\Controller;
use App\Models\Otp;
use App\Models\User;
use App\Services\OtpService;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function index(Otp $otp)
    {
        return view('auth.otp', [
            'otp' => $otp,
        ]);
    }

    public function store(Request $request)
    {
        $otpService = new OtpService();

        $otp = $otpService->create($request);

        event(new WhatsappEvent($otp));

        return redirect(route('otp.index', $otp->phone));
    }

    public function resend($otp)
    {
        $otpService = new OtpService();

        $otpService->resend($otp);

        return back();
    }

    public function check(Request $request, $otp)
    {
        $otpService = new OtpService();

        if($otp = $otpService->verify($request, $otp)) {
            if(is_int($otp) && $otp == 403) return back()->withErrors(['status' => 'Kode verifikasi kedaluarsa']);

//            $user = User::where('phone', $otp->phone)->first();
//
//            if($user) {
//                return (new LoginController())->login($user);
//            }

            return (new RegisterController)->register($otp);
        }

        return back()->withErrors(['status' => 'Kode verifikasi salah']);
    }
}
