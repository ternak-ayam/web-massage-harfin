@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    @include('layouts.navbar')
    <div class="p-4 grid md:grid-cols-2 grid-cols-1 gap-2">
        @forelse($vouchers as $voucher)
        <div class="w-full lg:flex">
            <div
                class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                title="Mountain">
            </div>
            <div
                class="relative border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <div class="flex justify-between">
                        <div class="text-gray-900 font-bold text-xl my-auto">{{ $voucher->name }}</div>
                        <div>
                            <a class="mt-6 rounded-lg bg-[#0BA2D4] px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white focus:outline-none lg:mx-0">
                                {{ $voucher->code }}
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-700 text-base mt-4">
                        {{ $voucher->description }}
                    </p>
{{--                    <div class="text-sm text-red-500 bottom-3 right-3 absolute">Berlaku--}}
{{--                        hingga: {{ now()->format('F j, Y') }}</div>--}}
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
    @if(count($vouchers) == 0)
        <div class="text-center my-4">Anda tidak memiliki voucher</div>
    @endif
    @include('layouts.navbottom')
@endsection
