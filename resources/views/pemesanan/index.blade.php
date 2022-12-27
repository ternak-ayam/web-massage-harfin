@extends('layouts.app')
@section('title', 'Pemesanan')
@section('content')
    <header>
        <nav class="bg-white border-gray-400 px-4 lg:px-6 py-2.5">
            <div class="grid grid-cols-2 grid-flow-rows gap-4 w-full">
                <div>
                    <form>
                        <input type="hidden" name="type" value="active">
                        @include('components.button.primary-button', ['title' => 'Pesanan Aktif', 'class' => 'w-full', 'withoutBg' => $type !== 'active', 'type' =>'submit'])
                    </form>
                </div>
                <div>
                    <form>
                        <input type="hidden" name="type" value="history">
                        @include('components.button.primary-button', ['title' => 'Riwayat Pesanan', 'class' => 'w-full', 'withoutBg' => $type !== 'history', 'type' =>'submit'])
                    </form>
                </div>
            </div>
            <div>
                @foreach($orders as $order)
                    <a href="{{ route('pemesanan.show', $order->order_id) }}"
                       class="w-full my-2 shadow bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="flex gap-4">
                            <div>
                                <img class="rounded-full object-cover w-12 h-12 lg:w-20 lg:h-20" src="{{ $order->service->getImageUrl() }}"
                                     alt="Image">
                            </div>
                            <div>
                                <div class="mb-8">
                                    <div
                                        class="text-[#0BA2D4] font-bold text-xl mb-2">{{ $order->service['name'] }}</div>
                                    <p class="text-gray-500 text-sm"><i
                                            class="fa-solid fa-location-dot"></i> {{ $order->requirement->getFullAddress() }}
                                    </p>
                                    <p class="text-gray-500 text-sm"><i
                                            class="fa-regular fa-calendar"></i> {{ $order->getFormattedServiceDue() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $orders->links() }}
            </div>
        </nav>
    </header>
    @include('layouts.navbottom')
@endsection
