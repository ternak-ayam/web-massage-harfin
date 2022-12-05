<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Services\OtpService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'user' => \request()->user(),
        ]);
    }

    public function update(UpdateRequest $request)
    {
        $user = $request->user();
        $lastPhoneNumber = $user->phone;

        if($lastPhoneNumber != $request->phone) {
            $otpService = new OtpService();
            $otp = $otpService->create($request);

            return redirect(route('otp.index', $otp->phone).'?action=update-profile');
        }

        $user->update($request->all());

        return back();
    }
}
