@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('layouts.navbar')
    @include('layouts.banner')

    <div class="w-full m-auto italic px-4 py-1">
        <marquee behavior="" direction="">Selamat Datang @auth
                {{ auth()->user()->name }}
            @endauth di JLIFE Pro.com. Selamat Menikmati Layanan Jasa di JLIFE Pro.com.
        </marquee>
    </div>
    <div class="container flex justify-center m-auto mt-8 mb-8 gap-2 flex-wrap">
        <a href="/">
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/hair-cutting.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Hair Care
            </div>
        </a>
        <a href="/">
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/body-massage.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Message
            </div>
        </a>
        <a href="/">
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/radiology.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Reflexiology
            </div>
        </a>
        <a href="/">
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/hair-cut.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Hair Cut
            </div>
        </a>
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
                                    alt="{{ $service->name }}"
                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
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
    <div class="mx-4 mt-4 grid md:grid-cols-4 grid-cols-2 gap-2 justify-center">

        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                <p class="text-gray-700 text-base mb-4">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                @include('components.button.primary-button', ['title' => 'Lihat Detail', 'class' => 'w-full'])
            </div>
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
