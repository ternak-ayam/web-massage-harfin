<header class="px-4 pt-4">
    <nav class="bg-white border-gray-200 px-4 py-4 dark:bg-[#0BA2D4] rounded-lg">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('assets/Logo Putih.png') }}"
                     class="w-28 lg:w-32"/>
            </a>
            @auth
                <div class="relative">
                    <button id="openDropdown" class="justify-center text-center">
                        <i class="fa-solid fa-envelope text-white"></i>
                        <span class="tab block text-xs text-white">Kotak Masuk</span>
                    </button>

                    <div id="dropdownContent"
                         class="absolute hidden right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20"
                         style="width:20rem;">
                        <div class="py-2">
                            @forelse($notifications as $notification)
                            <a class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                <p class="text-gray-600 text-sm mx-2">
                                    <span class="font-bold">{{ $notification->data['body'] }}</span> . <small> {{ $notification->created_at->diffForHumans() }} </small>
                                </p>
                            </a>
                            @empty
                                <div class="text-center">
                                    <span class="text-sm">Data masih kosong.</span>
                                </div>
                            @endforelse
{{--                            {{ $notifications->links() }}--}}
                        </div>
                        <div class="block bg-[#0BA2D4] text-white text-center py-2 text-base">Kotak Masuk</div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="justify-center text-center">
                    <i class="fa-solid fa-right-to-bracket text-white"></i>
                    <span class="tab block text-xs text-white">Login</span>
                </a>
            @endauth
        </div>
    </nav>
</header>
