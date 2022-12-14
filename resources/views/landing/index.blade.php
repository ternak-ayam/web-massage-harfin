@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('layouts.navbar')
    @include('layouts.banner')
    <div class="container flex justify-center m-auto mt-8 mb-8">
        // ICON
    </div>
    <div class="border-dashed border-b border-sky-500 p-2 mt-12 pb-4">
        <div class="container m-auto">
            <h1 class="text-3xl font-semibold">Top Jasa</h1>
        </div>
    </div>


    <div class="container mt-4 flex justify-center m-auto">
        <div class="marquee">
            <ul class="marquee-content">
                @foreach($services as $service)
                <li>
                    <a href="{{ route('pesanan.show', $service->slug) }}" class="group mx-1">
                        <div
                            class="aspect-w-1 aspect-h-1 h-28 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8 border">
                            <img
                                src="{{ $service->image }}"
                                alt="{{ $service->name }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $service->name }}</h3>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="border-dashed border-b border-sky-500 p-2 mt-12 pb-4">
        <div class="container m-auto">
            <h1 class="text-3xl font-semibold">Hotspot</h1>
        </div>
    </div>
    <div class="container mt-4 flex justify-center m-auto">
        <div class="marquee">
            <ul class="marquee-content">
                <li>
                    <a href="#" class="group mx-1">
                        <div
                            class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8 border">
                            <img
                                src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1621806057/attached_image/sehat-dengan-terapi-pijat-yang-tepat.jpg"
                                alt="Massage" class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">Massage 1</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container mx-auto px-6 mb-24 pt-8 text-center">
        <form action="">
            <div class="mx-auto max-w-lg">
                <h1 class="text-3xl text-gray-800 lg:text-4xl"><span class="font-bold">Ayo bergabung</span> <br> <span
                        class="font-light">menjadi mitra kami</span></h1>
                @include('components.button.primary-button', ['title' => 'Daftar mitra', 'type' => 'submit'])
            </div>
        </form>
    </div>
    <div class="mt-12">
        <h1 class="text-xl text-center text-gray-800"><span
                class="font-light">Silakan scan QR di bawah untuk berdonasi</span></h1>
        <div class="flex justify-center">
            <img class="w-72 h-72"
                 src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png"
                 alt="Barcode Dana">
        </div>
    </div>
    @include('layouts.navbottom')
@endsection
