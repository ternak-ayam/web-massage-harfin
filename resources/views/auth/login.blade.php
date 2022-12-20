@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="w-full container h-screen m-auto items-center flex mt-[-5rem]">
        <div class="container m-auto items-center max-w-lg">
            <div class="text-center">
                <img class="mx-auto" src="{{ asset('assets/Logo Warna.png') }}" alt="">
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="p-4 rounded-lg border">
                    <div class="text-2xl font-semibold text-center mb-4">Login</div>
                    <div class="mx-2 mb-6 justify-center">
                        <div class="my-2">
                            @include('components.field.input-text', ['name' => 'email', 'label' => 'components.field.label', 'title' => 'Email', 'value' => old('email')])
                        </div>
                        <div class="my-2">
                            @include('components.field.input-text', ['name' => 'password', 'type' => 'password', 'label' => 'components.field.label', 'title' => 'Password'])
                        </div>
                    </div>
                    <div>
                        <p class="text-xs text-center">Belum punya akun? <a href="{{ route('register') }}"
                                                                            class="text-blue-500 hover:underline">Buat
                                akun</a></p>
                    </div>
                    <div class="text-center mt-4">
                        @include('components.button.primary-button', ['title' => 'Login', 'type' => 'submit'])
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
