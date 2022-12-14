<header>
    <div
        class="p-12 mt-4 rounded-3xl mx-4 lg:text-center h-[20rem] bg-[#0BA2D4] text-gray-700 relative flex overflow-hidden">
        <div class="lg:w-1/3 w-full lg:ml-[20rem] text-white flex items-center text-sm lg:text-xl">
            <marquee behavior="" direction=""><i>Selamat Datang</i>  @auth
                    {{ auth()->user()->name }}
                @endauth di JLIFE Pro.com, Selamat Menikmati Layanan Jasa
                ✅Massage
                ✅ Reflexiolgy
                ✅Hair Care
                ✅Hair Cut
            </marquee>
        </div>
        <img class="absolute w-[40rem] lg:right-[20rem]  lg:top-0 right-[-5rem] top-0"
             src="{{ asset('assets/spg.png') }}" alt="">
    </div>
</header>
