<?php

namespace App\Http\Controllers\Auth;

use App\Events\WhatsappEvent;
use App\Http\Controllers\Controller;
use App\Models\Otp;
use App\Models\User;
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
        $user = User::where('phone', $request->phone)->first();

        if(blank($user)) {
            $request->validate([
                'name' => ['sometimes', 'string', 'max:50'],
                'email' => ['sometimes', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'digits_between:11,13', 'unique:users'],
            ]);
        }

        $otp = Otp::create([
            'token' => rand(111111, 999999),
            'name' => $user->name ?? $request->name,
            'phone' => $user->phone ?? $request->phone,
            'email' => $user->email ?? $request->email,
            'expired_at' => now()->addMinutes(2),
        ]);

        return redirect(route('otp.index', $otp->phone));
    }

    public function resend($otp)
    {
        $otp = Otp::find($otp)->whereNull('verified_at')->first();

        $otp->update([
            'expired_at' => now()->addMinutes(2),
            'token' => rand(111111, 999999),
        ]);

        $otp->increment('count_sending');

        event(new WhatsappEvent($otp));

        return back();
    }

    public function check(Request $request, $otp)
    {
        $otp = Otp::find($otp)->whereNull('verified_at')->where('expired_at', '>', now())->first();

        if(blank($otp)) {
            return back()->withErrors(['status' => 'Kode verifikasi kedaluarsa']);
        }

        $token = implode('', $request->token);

        if((int) $token === $otp->token) {
            $otp->update(['verified_at' => now()]);
            $data = $otp;

            $otp->delete();

            if($user = User::where('phone', $otp->phone)->first()) {
                return (new LoginController())->login($user);
            }

            return (new RegisterController)->register($data);
        }

        return back()->withErrors(['status' => 'Kode verifikasi salah']);
    }
}
