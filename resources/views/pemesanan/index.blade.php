@extends('layouts.app')
@section('title', 'Pemesanan')
@section('content')
    <header>
        <nav class="bg-white border-gray-400 px-4 lg:px-6 py-2.5">
            <div class="grid grid-cols-2 grid-flow-rows gap-4  w-full">
                <div>
                    @include('components.button.primary-button', ['title' => 'Pesanan Aktif', 'class' => 'w-full'])
                </div>
                <div>
                    @include('components.button.primary-button', ['title' => 'Riwayat Pesanan', 'class' => 'w-full'])
                </div>
            </div>
        </nav>
    </header>
    @include('layouts.navbottom')
@endsection
