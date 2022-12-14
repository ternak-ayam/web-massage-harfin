@extends('layouts.app')
@section('title', 'Massage')
@section('content')
    @include('layouts.navbar')
    <div class="md:container md:m-auto mt-4 mx-4">
        <div class="lg:ml-1 ml-2">
            <h1 class="text-2xl font-semibold py-2">Message</h1>
            <h2 class="mb-2 text-base">Pilih Durasi Pengerjaan</h2>
        </div>
        <div class="w-full">
            <div class="mt-2">

{{--                @foreach($service->details as $detail)--}}
                <div class="w-full lg:max-w-full lg:flex">
                    <div
                        class="h-48 lg:h-auto lg:w-48 border-black border border-r-0 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                        title="Mountain">
                    </div>
                    <div
                        class="relative md:w-1/4 w-full bg-red-200 border-r border-b border-l border-black lg:border-l-0 lg:border-t lg:border-black bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div class="font-bold text-xl mb-2">Body Massage</div>
                            <p class="text-base">Durasi: 1 Jam</p>
                            <div class="text-base flex absolute justify-end bottom-2 right-2"><span class="p-2 bg-[#0BA2D4] text-white border-black border rounded-lg">Rp12.000</span></div>
                        </div>
                    </div>
                </div>
{{--                @endforeach--}}
            </div>
        </div>
        <div class="mt-8 lg:ml-1 ml-2">
            <h2 class="mb-2 text-base">Tambahan Layanan Jasa (opsional)</h2>
        </div>
        <div class="mt-2">
            <!--Card 1-->
            <div class="lg:w-[50rem] sm:w-full lg:max-w-full lg:flex relative">
                <div
                    class="h-48 lg:h-auto lg:w-48 border-black border border-r-0 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                    title="Mountain">
                </div>
                <div
                    class="border-r border-b border-l lg:border-l-0 lg:border-t border-black bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-12">
                        <div class="text-gray-900 font-bold text-xl">Body massage</div>
                        <p class="text-base mb-2">Durasi: 1 Jam</p>
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium
                            nihil.
                        </p>

                        <div class="text-base flex absolute justify-end bottom-4 left-"><span class="p-2 bg-[#0BA2D4] text-white border-black border rounded-lg">Rp12.000</span></div>

                        <div class="custom-number-input h-10 w-32 ml-auto absolute right-4 bottom-6">
                            <div class="flex flex-row h-10 w-full rounded-lg relative mt-1">
                                <button data-action="decrement"
                                        class="h-full w-20 rounded-l cursor-pointer outline-none bg-[#0BA2D4]">
                                    <span class="m-auto text-2xl text-white font-thin">−</span>
                                </button>
                                <input type="number"
                                       class="outline-none focus:outline-none text-center w-full border text-md hover:text-black focus:text-black md:text-basecursor-default flex items-center outline-none"
                                       name="custom-input-number" min="0" value="0">
                                <button data-action="increment"
                                        class="h-full w-20 rounded-r bg-[#0BA2D4] cursor-pointer">
                                    <span class="m-auto text-2xl text-white font-thin">+</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" class="mt-12 pl-2 mb-24">
                <div class="md:w-1/2">
                    <div class="my-2">
                        <label for="" class="font-semibold">Jenis Kelamin</label>
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Pria', 'name' => 'jenis_kelamin', 'id' => 'pria', 'value' => 1])
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Wanita', 'name' => 'jenis_kelamin', 'id' => 'wanita', 'value' => 0])
                    </div>
                    <div class="my-2">
                        <label for="" class="font-semibold">Jenis Kelamin Terapis</label>
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Pria', 'name' => 'jenis_kelamin_terapis', 'id' => 'pria_terapis', 'value' => 1])
                        @include('components.field.radio', ['label' => 'components.field.label-inline', 'title' => 'Wanita', 'name' => 'jenis_kelamin_terapis', 'id' => 'wanita_terapis', 'value' => 0])
                    </div>
                    <div class="flex w-full flex-wrap gap-2 mt-2 mb-4">
                        <div class="my-2">
                            @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'Jam', 'type' => 'time'])
                        </div>
                        <div class="my-2">
                            @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'Tanggal', 'type' => 'date'])
                        </div>
                    </div>
                    <div class="my-2">
                        @include('components.field.text-area', ['label' => 'components.field.label', 'title' => 'Lokasi Kota'])
                    </div>
                    <div class="my-2">
                        @include('components.field.text-area', ['label' => 'components.field.label', 'title' => 'Alamat Lengkap'])
                    </div>
                    <div class="my-2">
                        @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'Nama'])
                    </div>
                    <div class="my-2">
                        @include('components.field.input-text', ['label' => 'components.field.label', 'title' => 'No. HP/WA'])
                    </div>
                    <div class="my-2">
                        @include('components.field.text-area', ['label' => 'components.field.label', 'title' => 'Catatan Tambahan'])
                    </div>
                    <div class="my-2">
                        <label for="" class="font-semibold">Metode Pembayaran</label>
                        @include('components.field.checkbox', ['label' => 'components.field.label-inline', 'title' => 'Cash', 'id' => 'payment_method'])
                    </div>
                </div>
                @include('layouts.payment-action-bottom')
            </form>
        </div>
@endsection
