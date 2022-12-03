@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    @include('layouts.navbar')
    <div class="w-full container h-screen m-auto items-center flex mt-[-5rem]">
        <div class="container m-auto items-center max-w-lg p-4 rounded-lg border">
            <div class="text-2xl font-semibold text-center mb-4">Profile</div>
            <div class="mx-2 mb-6 justify-center">
                @include('components.field.input-text', ['name' => 'name', 'label' => 'components.field.label', 'title' => 'Nama'])
            </div>
            <div class="mx-2 mb-6 justify-center">
                @include('components.field.input-text', ['name' => 'phone', 'label' => 'components.field.label', 'title' => 'No. Hp'])
            </div>
            <div class="mx-2 mb-6 justify-center">
                @include('components.field.input-text', ['name' => 'email', 'label' => 'components.field.label', 'title' => 'Email'])
            </div>
            <div class="text-center">
                @include('components.button.primary-button', ['title' => 'Bantuan'])
                @include('components.button.danger-button', ['title' => 'Logout'])
            </div>
        </div>
    </div>
    @include('layouts.navbottom')
@endsection
