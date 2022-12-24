@extends('layouts.app')
@section('title', $service->name)
@push('script')
    <script>
        const serviceBg = document.querySelectorAll(".service-bg");
        const additionalServicesElem = document.querySelectorAll(".additional_services");

        let services = [];
        let additionalServices = [];

        serviceBg.forEach((item, i) => {
            let price = 0;
            item.addEventListener("change", (e) => {
                if (document.getElementById("service-bg" + i).classList.contains("bg-red-200")) {
                    document.getElementById("service-bg" + i).classList.remove("bg-red-200");
                    price = 0;
                } else {
                    document.getElementById("service-bg" + i).classList.add("bg-red-200");
                    price = e.target.getAttribute("data-price");
                }

                services[i] = {
                    price: parseInt(price),
                    id: parseInt(e.target.value),
                };

                displayTotal();
            });

        });

        additionalServicesElem.forEach((item, i) => {
            let price = 0;
            let quantity = 0;

            item.addEventListener("change", (e) => {
                if (document.getElementById("additional_services_bg" + i).classList.contains("bg-red-200")) {
                    document.getElementById("additional_services_bg" + i).classList.remove("bg-red-200");
                    price = 0;
                    document.getElementById("additional_services_quantity" + i).value = 0;
                } else {
                    document.getElementById("additional_services_bg" + i).classList.add("bg-red-200");
                    quantity = 1;
                    price = e.target.getAttribute("data-price");
                    document.getElementById("additional_services_quantity" + i).value = quantity;
                }

                additionalServices[i] = {
                    price: parseInt(price),
                    quantity: quantity,
                    id: parseInt(e.target.value),
                };

                displayTotal();
            });

            document.getElementById("increment" + i).addEventListener("click", () => {
                quantity = document.getElementById("additional_services_quantity" + i).value;

                additionalServices[i] = {
                    ...additionalServices[i],
                    quantity: parseInt(quantity) + 1,
                };

                displayTotal();
            });

            document.getElementById("decrement" + i).addEventListener("click", () => {
                quantity = document.getElementById("additional_services_quantity" + i).value;

                additionalServices[i] = {
                    ...additionalServices[i],
                    quantity: parseInt(quantity) - 1,
                };

                displayTotal();
            });

        });

        const displayTotal = () => {
            let subtotal = 0;
            const totalElement = document.getElementById("total");

            services.forEach((item) => {
                subtotal += item.price;
            });

            additionalServices.forEach((item) => {
                subtotal += item.price * item.quantity;
            });

            totalElement.innerHTML = formatRupiah(subtotal);
        }


    </script>
@endpush
@section('content')
    @include('layouts.navbar')
    <div class="md:container md:m-auto mt-4 mx-4">
        <div class="lg:ml-1 ml-2">
            <h1 class="text-2xl font-semibold py-2">Message</h1>
            <h2 class="mb-2 text-base">Pilih Durasi Pengerjaan</h2>
        </div>
        <form action="{{ route('pesanan.store') }}" method="post">
            @csrf
            <input type="hidden" name="service" value="{{ $service->slug }}">
            <div class="w-full">
                <div class="mt-2">
                    @foreach($service->details as $key => $detail)
                        <label for="service_detail{{ $key }}" class="w-full lg:max-w-full lg:flex cursor-pointer my-1">
                            <input id="service_detail{{ $key }}" type="checkbox" class="hidden service-bg"
                                   data-price="{{ $detail->price }}" name="service_details[]" value="{{ $detail->id }}">
                            <div
                                class="h-48 lg:h-auto lg:w-48 border-black border border-r-0 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                                title="{{ $detail->title }}">
                            </div>
                            <div
                                id="service-bg{{ $key }}"
                                class="relative md:w-1/4 w-full border-r border-b border-l border-black lg:border-l-0 lg:border-t lg:border-black bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                    <div class="font-bold text-xl mb-2">{{ $detail->title }}</div>
                                    <p class="text-base">Durasi: {{ $detail->duration }}</p>
                                    <div class="text-base flex absolute justify-end bottom-2 right-2"><span
                                            class="p-2 bg-[#0BA2D4] text-white border-black border rounded-lg">{{ $detail->getPrice() }}</span>
                                    </div>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="mt-8 lg:ml-1 ml-2">
                <h2 class="mb-2 text-base">Tambahan Layanan Jasa (opsional)</h2>
            </div>
            <div class="mt-2">
                @foreach($service->additionals as $key => $additional)
                    <label for="additional_services{{ $key }}"
                           class="lg:w-[50rem] sm:w-full lg:max-w-full lg:flex relative my-1">
                        <input type="checkbox" id="additional_services{{ $key }}" class="hidden additional_services"
                               name="additional_services[]" data-price="{{ $additional->price }}"
                               value="{{ $additional->id }}">
                        <div
                            class="h-48 lg:h-auto lg:w-48 border-black border border-r-0 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                            title="Mountain">
                        </div>
                        <div
                            id="additional_services_bg{{ $key }}"
                            class="w-full border-r border-b border-l lg:border-l-0 lg:border-t border-black bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-12">
                                <div class="text-gray-900 font-bold text-xl">{{ $additional->name }}</div>
                                @if($additional->name === "Matras")
                                <p class="text-base mb-2"></p>
                                @else
                                <p class="text-base mb-2">Durasi: {{ $detail->duration }}</p>
                                @endif
                                <p class="text-gray-700 text-sm">
                                    {{ $additional->description }}
                                </p>

                                <div class="text-base flex absolute justify-end bottom-4 left-"><span
                                        class="p-2 bg-[#0BA2D4] text-white border-black border rounded-lg">{{ $additional->getPrice() }}</span>
                                </div>

                                <div class="custom-number-input h-10 w-32 ml-auto absolute right-4 bottom-6">
                                    <div class="flex flex-row h-10 w-full rounded-lg relative mt-1">
                                        <button data-action="decrement"
                                                type="button"
                                                id="decrement{{ $key }}"
                                                class="h-full w-20 rounded-l cursor-pointer outline-none bg-[#0BA2D4]">
                                            <span class="m-auto text-2xl text-white font-thin">−</span>
                                        </button>
                                        <input type="number"
                                               id="additional_services_quantity{{ $key }}"
                                               class="outline-none focus:outline-none text-center w-full border text-md hover:text-black focus:text-black md:text-basecursor-default flex items-center outline-none"
                                               name="quantity[{{ $additional->id }}]" min="0" value="0">
                                        <button data-action="increment"
                                                type="button"
                                                id="increment{{ $key }}"
                                                class="h-full w-20 rounded-r bg-[#0BA2D4] cursor-pointer">
                                            <span class="m-auto text-2xl text-white font-thin">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                @endforeach

                <div class="md:w-1/2">
                    <div class="my-2">
                        <label for="" class="font-semibold">Jenis Kelamin</label>
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Pria', 'name' => 'customer_sex', 'id' => 'pria', 'value' => 1])
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Wanita', 'name' => 'customer_sex', 'id' => 'wanita', 'value' => 0])
                    </div>
                    <div class="my-2">
                        <label for="" class="font-semibold">Jenis Kelamin Terapis</label>
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Pria', 'name' => 'therapist_sex', 'id' => 'pria_terapis', 'value' => 1])
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Wanita', 'name' => 'therapist_sex', 'id' => 'wanita_terapis', 'value' => 0])
                    </div>
                    <div class="flex w-full flex-wrap gap-2 mt-2 mb-4">
                        <div class="my-2">
                            @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'Jam', 'name' => 'time', 'type' => 'time', 'min' => now()->timezone('Asia/Jakarta')->addHours(2)->format('H:i')])
                        </div>
                        <div class="my-2">
                            @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'Tanggal', 'name' => 'date', 'type' => 'date', 'min' => now()->timezone('Asia/Jakarta')->format('Y-m-d')])
                        </div>
                    </div>
                    <div class="my-2">
                        @include('components.field.select', ['label' => 'components.field.label', 'title' => 'Lokasi Kota', 'name' => 'city', 'data' => $cities])
                    </div>
                    <div class="my-2">
                        @include('components.field.text-area', ['label' => 'components.field.label', 'title' => 'Alamat Lengkap', 'name' => 'address',])
                    </div>
                    <div class="my-2">
                        @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'Nama', 'value' => $user->name, 'name' => 'user_name'])
                    </div>
                    <div class="my-2">
                        @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'No. HP/WA', 'value' => $user->getPhoneNumber(), 'name' => 'phone'])
                    </div>
                    <div class="my-2">
                        @include('components.field.text-area', ['label' => 'components.field.label', 'title' => 'Catatan Tambahan', 'name' => 'notes'])
                    </div>
                    <div class="my-2">
                        <label for="" class="font-semibold">Metode Pembayaran</label>
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'name' => 'channel', 'title' => 'COD/Cash (Diwajibkan deposit sebesar Rp20.000 untuk jaminan)', 'id' => 'payment_method_cod', 'value' => 'cod'])
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'name' => 'channel', 'title' => 'OVO/DANA', 'id' => 'payment_method_xendit', 'value' => 'xendit'])
                    </div>
                </div>
            @include('layouts.payment-action-bottom')
        </form>
    </div>
@endsection
