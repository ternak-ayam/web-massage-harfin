<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-4 dark:bg-[#0BA2D4]">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="{{ asset('assets/Logo Putih.png') }}"
                     class="mr-3 h-6 lg:scale-[200%] scale-[250%] sm:h-9 ml-8 lg:ml-0"/>
            </a>

            <a href="{{ route('pemesanan.index') }}" class="justify-center text-center">
                <i class="fa-solid fa-bag-shopping text-white"></i>
                <span class="tab block text-xs text-white">Pemesanan</span>
            </a>
        </div>
    </nav>
</header>
