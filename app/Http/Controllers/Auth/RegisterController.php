<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function register($data)
    {
        event(new Registered($user = $this->create([
            'name' => $data->name,
            'email' => $data->email,
            'phone' => $data->phone,
            'password' => $data->password,
        ])));

        $this->guard()->login($user);

        return \request()->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }

    public function checkOtp(Request $request)
    {
        $request->validate([
            'name' => ['sometimes', 'string', 'max:50'],
            'email' => ['sometimes', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'digits_between:11,13', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        return (new OtpController())->store($request);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => $data['password'],
        ]);
    }
}
