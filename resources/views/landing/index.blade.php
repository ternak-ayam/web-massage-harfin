@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('layouts.navbar')
    @include('layouts.banner')
    {{-- @include('layouts.bannerdua') --}}

    <div class="w-full m-auto italic px-4 py-1">
        <marquee behavior="" direction="" >Selamat Datang di JLIFEPro.com</marquee>
    </div>
    <div class="container flex justify-center m-auto mt-8 mb-8 gap-2 flex-wrap">
        <div>
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/hair-cutting.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Hair Care
           </div>
        </div>
        <div>
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/body-massage.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Message
           </div>
        </div>
        <div >
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/radiology.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Reflexiology
           </div>
        </div>
        <div>
            <div class="bg-[#0BA2D4] p-2 rounded-full flex justify-center flex-col">
                <img src="{{ asset('assets/icon/hair-cut.png')}}" class="scale-50" alt="">
            </div>
            <div class="text-[0.7rem] text-white bg-[#0BA2D4]  rounded-lg mt-2 text-center p-1">
                Hair Cut
           </div>
        </div>
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
    {{-- <div class="container mt-4 flex justify-center m-auto">
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
    </div> --}}
    {{-- jenis card 1 --}}
    <div class="mt-4 container m-auto flex flex-wrap justify-center gap-2">
        <div class="flex justify-center">
            <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
              <img class=" w-full lg:h-[12rem] md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="" />
              <div class="p-6 flex flex-col justify-start">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                <p class="text-gray-700 text-base mb-4">
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
          <div class="flex justify-center">
            <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
              <img class=" w-full lg:h-[12rem] md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="" />
              <div class="p-6 flex flex-col justify-start">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                <p class="text-gray-700 text-base mb-4">
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
          {{-- jenis card 2 --}}
            <div class="flex justify-center">
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
                    <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                </div>
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
