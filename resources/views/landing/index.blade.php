@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('layouts.navbar')
    @include('layouts.banner')

    <div class="w-full m-auto italic px-4 pt-2 bg-blue-300 wordart">
        <marquee behavior="" direction=""><p class="md:text-lg text-base text-white preview">Selamat datang @auth
                {{ auth()->user()->name }}
            @endauth di JLIFE Pro, selamat menikmati layanan jasa di JLIFE Pro
            </p></marquee>
    </div>
    <div class="border-dashed border-b border-sky-500 p-2 mt-12 pb-4">
        <div class="container m-auto">
            <h1 class="text-3xl font-semibold">Pilihan</h1>
        </div>
    </div>
    <div class="container flex justify-center m-auto mt-8 mb-8 gap-8 flex-wrap">
        <a href="{{ route('pesanan.show', 'hair-care') }}">
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/hair-cutting.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Hair Care
            </div>
        </a>
        <a href="{{ route('pesanan.show', 'massage') }}">
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/body-massage.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Message
            </div>
        </a>
        <a href="{{ route('pesanan.show', 'reflexology') }}">
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/radiology.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Reflexology
            </div>
        </a>
        <a href="{{ route('pesanan.show', 'hair-care') }}">
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
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('pesanan.show', $category->service['slug']) }}" class="group mx-1">
                            <div
                                class="aspect-w-1 aspect-h-1 h-28 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8 border">
                                <img
                                    src="{{ $category->getImageUrl() }}"
                                    alt="{{ $category->name }}"
                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700">{{ $category->name }}</h3>
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
            <a href="" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="{{ asset('storage/assets/male.jpeg') }}" alt=""/>
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-base font-medium mb-2">New Haircut Male</h5>
                <p class="text-gray-700 text-base mb-4">

                </p>
                <div class="text-center">
                    @include('components.button.primary-a', ['title' => 'Lihat Detail', 'class' => 'w-full', 'href' => 'https://bit.ly/3hRw2Al'])
                </div>
            </div>
        </div>
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="{{ asset('storage/assets/female.jpeg') }}" alt=""/>
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-base font-medium mb-2">New Haircut Female</h5>
                <p class="text-gray-700 text-base mb-4">

                </p>
                <div class="text-center">
                    @include('components.button.primary-a', ['title' => 'Lihat Detail', 'class' => 'w-full', 'href' => 'https://bit.ly/3hRw2Al'])
                </div>
            </div>
        </div>
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="{{ asset('storage/assets/kids.jpeg') }}" alt=""/>
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-base font-medium mb-2">New Haircut Kids</h5>
                <p class="text-gray-700 text-base mb-4">

                </p>
                <div class="text-center">
                    @include('components.button.primary-a', ['title' => 'Lihat Detail', 'class' => 'w-full', 'href' => 'https://bit.ly/3hRw2Al'])
                </div>
            </div>
        </div>
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="https://bit.ly/3hRw2Al" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="{{ asset('storage/assets/hairspa.jpeg') }}" alt=""/>
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-base font-medium mb-2">What is Hair Spa?</h5>
                <p class="text-gray-700 text-base mb-4">

                </p>
                <div class="text-center">
                    @include('components.button.primary-a', ['title' => 'Lihat Detail', 'class' => 'w-full', 'href' => 'https://bit.ly/3hRw2Al'])
                </div>
            </div>
        </div>


    </div>

    <div class="container mx-auto px-6 mb-24 pt-8 text-center">
        <form action="">
            <div class="mx-auto max-w-lg">
                <h1 class="text-3xl text-gray-800 lg:text-4xl"><span class="font-bold">Ayo bergabung</span> <br> <span
                        class="font-light">menjadi mitra kami</span>
                </h1>
                @include('components.button.primary-button', ['title' => 'Daftar mitra', 'type' => 'button', 'id' => 'daftar_mitra', 'class' => 'mt-4'])
            </div>
        </form>
    </div>
    <div class="my-12">
        <form action="{{ route('donation.pay') }}" method="post">
            @csrf
            <h1 class="text-xl text-center text-gray-800"><span
                    class="font-light">Silakan masukkan jumlah donasi yang akan kamu berikan</span></h1>
            <div class="justify-center flex mt-4">
                <div>
                    <div>
                        @include('components.field.input-text', ['name' => 'amount', 'placeholder' => 'Cth: 80000', 'class' => 'w-25'])
                    </div>
                    <div class="text-center mt-4">
                        @include('components.button.primary-button', ['title' => 'Donasi', 'type' => 'submit'])
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.navbottom')
    <script>
        const daftarMitraButton = document.getElementById("daftar_mitra");

        daftarMitraButton.addEventListener("click", () => {
            window.open("https://forms.gle/qKStXf3rrxRQZoda7", "_blank");
        });
    </script>
@endsection
