<header class="px-4 pt-4">
    <nav class="bg-white border-gray-200 px-4 py-4 dark:bg-[#0BA2D4] rounded-lg">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('assets/Logo Putih.png') }}"
                     class="w-28 lg:w-32"/>
            </a>
            @auth
                <a href="#" class="justify-center text-center">
                    <i class="fa-solid fa-envelope text-white"></i>
                    <span class="tab block text-xs text-white">Kotak Masuk</span>
                </a>
            @else
                <a href="{{ route('login') }}" class="justify-center text-center">
                    <i class="fa-solid fa-right-to-bracket text-white"></i>
                    <span class="tab block text-xs text-white">Login</span>
                </a>
            @endauth
        </div>
    </nav>
</header>
