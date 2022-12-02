@extends('layouts.app')
@section('title', 'Massage')
@section('content')
    @include('layouts.navbar')
    <div class="container m-auto mt-2">
        <div class="lg:ml-1 ml-2">
            <h1 class="text-3xl font-semibold py-2">Message</h1>
            <h2 class="mb-2">Pilih Durasi Pengerjaan</h2>
        </div>
        <div class="w-full">
            <div class="">
                <!--Card 1-->
                <div class=" w-full lg:max-w-full lg:flex">
                    <div
                        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                        title="Mountain">
                    </div>
                    <div
                        class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/>
                                </svg>
                                Message 1
                            </p>
                            <div class="text-gray-900 font-bold text-xl mb-2">1 jam body massage Rp. 104.000</div>
                            <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium
                                nihil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <!--Card 1-->
                <div class=" w-full lg:max-w-full lg:flex ">
                    <div
                        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                        title="Mountain">
                    </div>
                    <div
                        class=" bg-red-400 border-r border-b border-l border-red-400 lg:border-l-0 lg:border-t lg:border-red-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/>
                                </svg>
                                Message 1
                            </p>
                            <div class="text-gray-900 font-bold text-xl mb-2">1 jam body massage Rp. 104.000</div>
                            <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium
                                nihil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 lg:ml-1 ml-2 bg-blu-200">
            <h1 class="text-3xl font-semibold py-2">Tambahan Layanan Jasa (opsional ) </h1>
            <h2 class="mb-2">Pilih Durasi Pengerjaan</h2>
        </div>
        <div class="mt-2">
            <!--Card 1-->
            <div class="lg:w-[50rem] sm:w-full lg:max-w-full lg:flex ">
                <div
                    class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90')"
                    title="Mountain">
                </div>
                <div
                    class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <p class="text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/>
                            </svg>
                            Message 1
                        </p>
                        <div class="text-gray-900 font-bold text-xl mb-2">1 jam body massage Rp. 104.000</div>
                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium
                            nihil.</p>

                        <div class="custom-number-input h-10 w-32">
                            <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Jumlah
                            </label>
                            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                <button data-action="decrement"
                                        class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                    <span class="m-auto text-2xl font-thin">−</span>
                                </button>
                                <input type="number"
                                       class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                       name="custom-input-number" value="0"></input>
                                <button data-action="increment"
                                        class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                    <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" class="mt-2 pl-2">
                <div class="my-2">
                    <label for="" class="font-semibold">Jenis Kelamin</label>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                               class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                               class="ml-2 text-sm font-medium text-gray-900 dark:text-black-300">Pria</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="checked-checkbox" type="checkbox" value=""
                               class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checked-checkbox"
                               class="ml-2 text-sm font-medium text-gray-900 dark:text-black-300">Wanita</label>
                    </div>
                </div>
                <div class="">
                    <label for="" class="font-semibold">Jenis Kelamin Terapis</label>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                               class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                               class="ml-2 text-sm font-medium text-gray-900 dark:text-black-300">Pria</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="checked-checkbox" type="checkbox" value=""
                               class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checked-checkbox"
                               class="ml-2 text-sm font-medium text-gray-900 dark:text-black-300">Wanita</label>
                    </div>
                </div>
                <div class="flex w-full flex-wrap gap-2 mt-2 mb-4">
                    <div>
                        <label for="first_name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Jam</label>
                        <input type="time" id="first_name"
                               class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="John" required>
                    </div>
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal</label>
                        <input type="date" id="first_name"
                               class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="John" required>
                    </div>
                </div>
                <div class="mr-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Lokasi
                        Kota</label>
                    <textarea id="message" rows="2"
                              class="lg:w-[40rem] mb-2 block p-2.5 w-full text-sm text-white bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Asal kota...."></textarea>
                </div>
                <div class="mr-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat
                        lengkap</label>
                    <textarea minlength="15" id="message" rows="2"
                              class="lg:w-[40rem] mb-2 block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Alamat lengkap...."></textarea>
                </div>
                <div>
                    <label for="first_name"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama</label>
                    <input type="text" id="first_name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Nama...." required>
                </div>
                <div class="mt-2 mb-2">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">No
                        Hp/Wa</label>
                    <input type="number" id="first_name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="No Hp/Wa" required>
                </div>
                <div class="mr-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Catatan
                        Tambahan</label>
                    <textarea id="message" rows="2"
                              class="lg:w-[40rem] mb-2 block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Tambah catatan...."></textarea>
                </div>
                <div class="">
                    <label for="" class="font-semibold">Metode Pembayaran</label>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                               class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                               class="ml-2 text-sm font-medium text-gray-900 dark:text-black-300">JPay</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="checked-checkbox" type="checkbox" value=""
                               class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checked-checkbox"
                               class="ml-2 text-sm font-medium text-gray-900 dark:text-black-300">Cash</label>
                    </div>
                </div>
                <div class="flex gap-5 mb-8 flex-wrap">
                    <div class="mt-2 mb-2">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Harga
                            Total</label>
                        <input type="number" id="first_name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Rp." required>
                    </div>
                    <div class="lg:mt-10  md:mt-10">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-light py-1  rounded text-lg w-[20rem]">
                            Pesan
                        </button>
                    </div>
                </div>
            </form>
        </div>
@endsection
