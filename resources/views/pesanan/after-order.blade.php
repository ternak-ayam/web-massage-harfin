@extends('layouts.app')
@section('title', 'Pesanan Berhasil')
@section('content')
    @include('layouts.navbar')
    <form method="post">
        @csrf
        <div class="w-full container h-screen m-auto items-center flex">
            <div class="container m-auto items-center p-4 rounded-lg">
                <div class="text-2xl font-semibold text-center mb-4">
                    Pesananmu <br>
                    @if($order->isSettle())
                        Berhasil!
                    @elseif($order->isPending())
                        Menunggu Pembayaran
                    @elseif($order->isDone())
                        Selesai
                    @else
                        Dibatalkan!
                    @endif
                </div>
                <div class="text-center">
                    @if($order->isSettle() || $order->isDone())
                        <img class="mx-auto" width="180"
                             src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Check-Logo.png"
                             alt="Check Logo">
                    @elseif($order->isPending())
                        <img class="mx-auto" width="180"
                             src="https://icones.pro/wp-content/uploads/2021/03/symbole-de-l-horloge-jaune.png"
                             alt="Check Logo">
                    @else
                        <img class="mx-auto" width="180" src="https://cdn-icons-png.flaticon.com/512/391/391045.png"
                             alt="Check Logo">
                    @endif
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
                        @if($order->hasDp())
                            <div class="grid grid-cols-2 gap-4 text-lg">
                                <div class="text-right">
                                    Uang Jaminan:
                                </div>
                                <div class="text-left">
                                    {{ $order->getDpFormattedPrice() }}
                                </div>
                            </div>
                        @endif
                        <div class="grid grid-cols-2 gap-4 text-lg">
                            <div class="text-right">
                                Metode Pembayaran:
                            </div>
                            <div class="text-left">
                                @if($order->channel === \App\Models\Order::XENDIT)
                                    OVO/DANA
                                @else
                                    {{ Str::upper($order->channel) }} <span class="text-red-600 text-xs">(Khusus metode pembayaran COD, Anda harus deposit uang jaminan sebesar {{ 'Rp' . number_format(env('DOWN_PAYMENT_AMOUNT'), 0, ',', '.') }})</span>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4 text-base text-red-600">
                            @if(! $order->isCancel())
                                @if($order->canCancel())
                                    Anda hanya dapat membatalkan pesanan dalam <span class="minute">3</span> Menit
                                @elseif(! $order->isCancel())
                                    Anda tidak dapat membatalkan pesanan ini
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    @if(! $order->isCancel())
                        @if($order->canCancel())
                            @include('components.button.danger-a', ['title' => 'Batalkan Pesanan', 'href' => route('pesanan.cancel', $order->order_id)])
                        @endif
                    @endif
                    @if($order->isPending())
                        @include('components.button.success-a', ['title' => $order->channel === \App\Models\Order::XENDIT ? 'Bayar' : 'Bayar uang jaminan', 'href' => $order->payment_path, 'target' =>'_blank'])
                    @endif
{{--                    @if($order->isSettle())--}}
{{--                        <div class="mt-4">--}}
{{--                            @include('components.button.primary-a', ['title' => 'Download Struk', 'href' => $order->invoice, 'target' => '_blank'])--}}
{{--                        </div>--}}
{{--                    @endif--}}
                </div>
            </div>
        </div>
    </form>
    @include('layouts.navbottom')
@endsection
