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

            <div class="grid grid-cols-2 gap-2">
                <div>

                    <div class="overflow-x-auto relative mt-4 mx-2">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    No
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Order ID
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Total
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Invoice
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $orders->firstItem() + $loop->index }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $order->order_id }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $order->total }}
                                </td>
                                <td class="py-4 px-6">
                                    @include('components.button.primary-button', ['title' => 'Download', 'type' => 'button'])
                                </td>
                                <td class="py-4 px-6">
                                    Dibatalkan
                                </td>
                                <td class="py-4 px-6">
                                    @include('components.button.primary-button', ['title' => 'Lihat Detail', 'type' => 'button'])
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div>
                    <div class="overflow-x-auto relative mt-4 mx-2">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    No
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Order ID
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Total
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Invoice
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Tanggal
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $orders->firstItem() + $loop->index }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $order->order_id }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $order->total }}
                                    </td>
                                    <td class="py-4 px-6">
                                        @include('components.button.primary-button', ['title' => 'Download', 'type' => 'button'])
                                    </td>
                                    <td class="py-4 px-6">
                                        Dibatalkan
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $order->created_at->format('j F Y') }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @include('layouts.navbottom')
@endsection
