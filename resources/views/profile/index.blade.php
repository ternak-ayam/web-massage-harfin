@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    @include('layouts.navbar')
    <form action="{{ route('profile.update') }}" method="post">
        @csrf
        <div class="w-full container h-screen m-auto items-center flex mt-[-5rem]">
            <div class="container m-auto items-center max-w-lg p-4 rounded-lg border">
                <div class="text-2xl font-semibold text-center mb-4">Profile</div>
                <div class="mx-2 mb-6 justify-center">
                    @include('components.field.input-text', ['name' => 'name', 'label' => 'components.field.label', 'title' => 'Nama', 'value' => $user->name, 'disabled' => true])
                </div>
                <div class="mx-2 mb-6 justify-center">
                    @include('components.field.input-text', ['name' => 'phone', 'label' => 'components.field.label', 'title' => 'No. Hp', 'value' => $user->phone, 'disabled' => true])
                </div>
                <div class="mx-2 mb-6 justify-center">
                    @include('components.field.input-text', ['name' => 'email', 'label' => 'components.field.label', 'title' => 'Email', 'value' => $user->email, 'disabled' => true])
                </div>
                <div class="text-center">
                    @include('components.button.danger-button', ['title' => 'Logout', 'formaction' => route('logout'), 'type' => 'submit'])
                    <div>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Bantuan?</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('layouts.navbottom')
@endsection
