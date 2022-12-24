@extends('layouts.app')
@section('title', 'Detail Pemesanan')
@section('content')
    @include('layouts.navbar')
    <div class="lg:container lg:mx-auto mx-4">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-2 mt-12">
            <div>
                <p class="text-gray-500 text-base m-2">
                    Profil Konsumen
                </p>
                <div class="block rounded-lg border bg-white">
                    <div class="py-3 px-6 border-b border-gray-300 bg-gray-50">
                        {{ $order->service['name'] }}
                        <p class="text-gray-500 text-base">
                            Order ID: {{ $order->order_id }}
                        </p>
                    </div>
                    @foreach($order->details as $detail)
                        <div class="p-6 grid grid-cols-2 gap-2 border-t">
                            <div>
                                <p class="text-gray-700 text-base">
                                    {{ $detail->service_name }}
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-700 text-base text-right">
                                    {{ $detail->serviceDetail['duration'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    @foreach($order->additionals as $additional)
                        <div class="p-6 grid grid-cols-2 gap-2 border-t">
                            <div>
                                <p class="text-gray-700 text-base">
                                    {{ $additional->service_name }}
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-700 text-base text-right">
                                    {{ $additional->additionalOrder['duration'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="grid grid-cols-2">
                        <div class="py-3 px-6 text-base border-t border-gray-300 text-gray-600">
                            Jenis Kelamin Terapis
                        </div>
                        <div class="py-3 px-6 text-base border-t border-gray-300 text-gray-600 text-right">
                            {{ $order->requirement->getTherapistSex() }}
                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center gap-2 bg-red-500 rounded-lg border border-red-300 text-white text-sm font-bold px-4 py-3 mt-4"
                    role="alert">
                    <i class="fa-solid fa-clock text-lg"></i>
                    <p>{{ $order->getFormattedServiceDue() }}</p>
                </div>
                <div class="mt-4">
                    <p class="text-gray-500 text-base m-2">
                        Catatan Tambahan
                    </p>
                    <div class="py-3 px-6 text-base rounded-lg border border-gray-300 text-gray-600">
                        {{ $order->requirement['notes'] }}
                    </div>
                </div>
            </div>
            <div>
                <p class="text-gray-500 text-base m-2">
                    Profil Konsumen
                </p>
                <div class="block rounded-lg border bg-white">
                    <div class="py-3 px-6 text-lg border-gray-300 text-gray-600">
                        <i class="fa-solid fa-user"></i> {{ $order->requirement['name'] }}
                    </div>
                    <div class="py-3 px-6 text-lg border-t border-gray-300 text-gray-600">
                        <i class="fa-solid fa-phone"></i> +{{ $order->requirement->getPhoneNumber() }}
                    </div>
                    <div class="py-3 px-6 text-lg border-t border-gray-300 text-gray-600">
                        <i class="fa-solid fa-location-dot"></i> {{ $order->requirement->getFullAddress() }}
                    </div>
                </div>
                <p class="text-gray-500 text-base m-2 mt-4">
                    Status Pemesanan
                </p>
                <div class="py-3 px-6 text-base rounded-lg border border-gray-300 text-gray-600">
                    {{ Str::ucfirst(Str::replace('_', ' ', $order->status)) }}
                </div>
                <p class="text-gray-500 text-base m-2 mt-4">
                    Detail Pembayaran
                </p>
                <div class="block rounded-lg border bg-white">
                    <div class="px-4 pt-4 pb-2 grid grid-cols-2 gap-2">
                        <div>
                            <p class="text-gray-700 text-base">
                                Harga Layanan
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-700 text-base text-right">
                                {{ $order->getSubtotalFormattedPrice() }}
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-2 grid grid-cols-2 gap-2 border-t">
                        <div>
                            <p class="text-gray-700 text-base">
                                Potongan Harga
                            </p>
                        </div>
                        <div>
                            <p class="text-green-500 text-base text-right">
                                -{{ $order->getDiscountFormattedPrice() }}
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-2 grid grid-cols-2 gap-2 border-t">
                        <div>
                            <p class="text-gray-700 text-base">
                                Total
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-700 text-base text-right">
                                {{ $order->getTotalFormattedPrice() }}
                            </p>
                        </div>
                    </div>
                    <div class="px-4 py-2 pb-4 grid grid-cols-2 gap-2 border-t">
                        <div class="my-auto">
                            <p class="text-gray-700 text-base">
                                Metode Pembayaran
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-700 text-base text-right">
                                @if($order->channel === \App\Models\Order::XENDIT)
                                    OVO/DANA
                                @else
                                    {{ Str::upper($order->channel) }} <br> <span class="text-red-600 text-xs">(Khusus metode pembayaran COD, Anda harus deposit uang jaminan sebesar {{ 'Rp' . number_format(env('DOWN_PAYMENT_AMOUNT'), 0, ',', '.') }})</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.navbottom')
@endsection
