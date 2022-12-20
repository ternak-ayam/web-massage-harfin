@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="w-full container h-screen m-auto items-center flex mt-[-5rem]">
        <div class="container m-auto items-center max-w-lg">
            <div class="text-center">
                <img class="mx-auto" src="{{ asset('assets/Logo Warna.png') }}" alt="">
            </div>
            <div class="p-8 rounded-lg border m-4">
                <div class="bg-white rounded text-center">
                    @include('components.alert.danger')
                    <h1 class="text-2xl font-semibold">Verifikasi OTP</h1>
                    <div class="flex flex-col mt-4">
                        <span class="text-lg">Silakan masukkan kode OTP yang kami kirim ke nomor:</span>
                        <span class="font-bold">{{ '*****' . Str::substr($otp->getPhoneNumber(), -4) }}</span>
                    </div>
                    <form method="post" action="{{ route('otp.check', $otp->id) }}">
                        @csrf
                        <div id="otp" class="flex flex-row justify-center text-center px-2 mt-5">
                            <input
                                class="m-2 border h-10 w-10 text-center form-control rounded focus:outline-none focus:border-[#0BA2D4]"
                                type="text" id="first" name="token[]" maxlength="1"/>
                            <input
                                class="m-2 border h-10 w-10 text-center form-control rounded focus:outline-none focus:border-[#0BA2D4]"
                                type="text" id="second" name="token[]" maxlength="1"/>
                            <input
                                class="m-2 border h-10 w-10 text-center form-control rounded focus:outline-none focus:border-[#0BA2D4]"
                                type="text" id="third" name="token[]" maxlength="1"/>
                            <input
                                class="m-2 border h-10 w-10 text-center form-control rounded focus:outline-none focus:border-[#0BA2D4]"
                                type="text" id="fourth" name="token[]" maxlength="1"/>
                            <input
                                class="m-2 border h-10 w-10 text-center form-control rounded focus:outline-none focus:border-[#0BA2D4]"
                                type="text" id="fifth" name="token[]" maxlength="1"/>
                            <input
                                class="m-2 border h-10 w-10 text-center form-control rounded focus:outline-none focus:border-[#0BA2D4]"
                                type="text" id="sixth" name="token[]" maxlength="1"/>
                        </div>
                        <div class="flex justify-center gap-2">
                            <div class="mt-4">
                                @include('components.button.danger-button', ['title' => 'Kirim ulang OTP', 'formaction' => route('otp.resend', $otp->id), 'formmethod' => 'post', 'type' => 'submit'])
                            </div>
                            <div class="mt-4">
                                @include('components.button.primary-button', ['title' => 'Verifikasi', 'formaction' => route('otp.check', $otp->id), 'formmethod' => 'post', 'type' => 'submit'])
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
