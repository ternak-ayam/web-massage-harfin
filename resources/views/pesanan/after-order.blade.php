@extends('layouts.app')
@section('title', 'Pesanan Berhasil')
@section('content')
    @include('layouts.navbar')
    <form method="post">
        @csrf
        <div class="w-full container h-screen m-auto items-center flex">
            <div class="container m-auto items-center max-w-lg p-4 rounded-lg">
                <div class="text-2xl font-semibold text-center mb-4">Pesananmu Berhasil!</div>
                <div class="text-center">
                    <img class="mx-auto" src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Check-Logo.png"
                         alt="Check Logo">
                    <div class="mt-2">
                        <div class="text-lg font-semibold text-center mb-2">Detail Pesanan</div>
                        <div class="grid grid-cols-2 gap-4 text-lg">
                            <div class="text-right">
                                Jasa:
                            </div>
                            <div class="text-left">
                                <ul>
                                    @foreach($order->details as $detail)
                                        <li>{{ $detail->serviceDetail['title'] }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-lg">
                            <div class="text-right">
                                Tambahan Jasa:
                            </div>
                            <div class="text-left">
                                <ul>
                                    @foreach($order->additionals as $additional)
                                        <li>{{ $additional->additionalOrder['name'] }} ({{ $additional->quantity }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-lg">
                            <div class="text-right">
                                Subtotal:
                            </div>
                            <div class="text-left">
                                {{ $order->getSubtotalFormattedPrice() }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-lg">
                            <div class="text-right">
                                Diskon:
                            </div>
                            <div class="text-left">
                                {{ $order->getDiscountFormattedPrice() }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-lg">
                            <div class="text-right">
                                Total:
                            </div>
                            <div class="text-left">
                                {{ $order->getTotalFormattedPrice() }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-lg">
                            <div class="text-right">
                                Metode Pembayaran:
                            </div>
                            <div class="text-left">
                                {{ Str::ucfirst($order->channel) }}
                            </div>
                        </div>
                        <div class="mt-4 text-base text-red-600">
                            @if($order->canCancel())
                                Anda hanya dapat membatalkan pesanan dalam <span class="minute">3</span> Menit
                            @else
                                Anda tidak dapat membatalkan pesanan ini
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    @if($order->canCancel())
                        @include('components.button.danger-button', ['title' => 'Batalkan Pesanan', 'formaction' => route('pesanan.cancel', $order->order_id)])
                    @endif
                    @include('components.button.primary-a', ['title' => 'Lihat Daftar Pesanan', 'href' => route('pemesanan.index')])
                    <div class="mt-4">
                        @include('components.button.primary-a', ['title' => 'Download Struk', 'href' => $order->invoice, 'target' => '_blank'])
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('layouts.navbottom')
@endsection
