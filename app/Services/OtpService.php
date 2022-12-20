<?php

namespace App\Services;

use App\Events\WhatsappEvent;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OtpService {
    public function verify(Request $request, $otp)
    {
        $otp = Otp::find($otp)->whereNull('verified_at')->where('expired_at', '>', now())->first();

        if(blank($otp)) {
            return 403;
        }

        $token = implode('', $request->token);

        if((int) $token === $otp->token) {
            $otp->update(['verified_at' => now()]);

            return $otp;
        }

        return false;
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
    }

    public function create($request)
    {
        return Otp::create([
            'token' => rand(111111, 999999),
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'email' => $request->email,
            'expired_at' => now()->addMinutes(Otp::EXPIRED_IN_MNT),
        ]);
    }
}
