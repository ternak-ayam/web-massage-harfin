<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function login($data)
//    {
//        $this->guard()->login($data);
//
//        return \request()->wantsJson()
//            ? new JsonResponse([], 201)
//            : redirect($this->redirectPath());
//    }

//    public function checkOtp(Request $request)
//    {
//        $user = User::where('phone', $request->phone)->first();
//
//        if(blank($user)) return back()->withErrors(['phone' => 'User dengan nomor ini tidak ditemukan']);
//
//        return (new OtpController())->store($request);
//    }
}
