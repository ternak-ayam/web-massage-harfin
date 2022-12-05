@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="w-full container h-screen m-auto items-center flex mt-[-5rem]">
        <div class="container m-auto items-center max-w-lg">
            <div class="text-center">
                <img class="mx-auto" src="{{ asset('assets/Logo Warna.png') }}" alt="">
            </div>
            <div class="p-4 rounded-lg border">
                <form action="{{ route('register.checkOtp') }}" method="post">
                    @csrf
                    <div class="text-2xl font-semibold text-center mb-4">Daftar</div>
                    <div class="mx-2 mb-6 justify-center">
                        <div class="my-2">
                            @include('components.field.input-text', ['name' => 'name', 'label' => 'components.field.label', 'title' => 'Nama'])
                        </div>
                        <div class="my-2">
                            @include('components.field.input-text', ['name' => 'phone', 'label' => 'components.field.label', 'title' => 'No. Hp/WA'])
                        </div>
                        <div class="my-2">
                            @include('components.field.input-text', ['name' => 'email', 'label' => 'components.field.label', 'title' => 'Email'])
                        </div>
                    </div>
                    <div>
                        <p class="text-xs text-center">Sudah punya akun? <a href="{{ route('login') }}"
                                                                            class="text-blue-500 hover:underline">
                                Masuk
                            </a>
                        </p>
                    </div>
                    <div class="text-center">
                        @include('components.button.primary-button', ['title' => 'Daftar', 'type' => 'submit'])
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
