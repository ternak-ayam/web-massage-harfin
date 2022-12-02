@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    @include('layouts.navbar')
    <div class="w-full container h-screen m-auto items-center flex mt-[-5rem]">
        <div class="container m-auto items-center max-w-lg p-4 rounded-lg border-4">
            <div class="text-2xl font-semibold text-center mb-4">Profile</div>
            <div class="md:flex md:items-center mb-6 justify-center">
                <div>
                    <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Name
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="inline-full-name" type="text">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6 justify-center">
                <div>
                    <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        No Hp
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="inline-full-name" type="text">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6 justify-center">
                <div>
                    <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Email
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20rem] p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="inline-full-name" type="text">
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-light py-1 px-4 rounded text-lg">
                <a href="">Bantuan</a>
            </button>
            <button class="bg-red-500 hover:bg-red-700 text-white font-light py-1 px-4 rounded text-lg">
                <a href=""> Log Out</a>
            </button>
        </div>
    </div>
@endsection
