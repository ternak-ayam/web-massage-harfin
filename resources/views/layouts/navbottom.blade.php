<section
    class="block fixed bottom-4 lg:inset-x-1/3 inset-x-8 z-50 text-white bg-[#0BA2D4] rounded-full border-2 border-white">
    <div id="tabs" class="flex justify-between">
        <a href="{{ route('landing.index') }}"
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-2 hover:scale-110 duration-300"
           activeClass="dark:text-gray-100 text-white">
            <i class="fa-solid fa-house text-white"></i>
            <span class="tab block text-xs text-white">Home</span>
        </a>
        <a href="{{ route('pemesanan.index') }}"
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-2 hover:scale-110 duration-300"
           activeClass="dark:text-gray-100 text-white">
            <i class="fa-solid fa-bag-shopping text-white"></i>
            <span class="tab block text-xs text-white">Pemesanan</span>
        </a>
        <a href=""
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-2 hover:scale-110 duration-300"
           activeClass="dark:text-gray-100 text-white">
            <i class="fa-solid fa-tags text-white"></i>
            <span class="tab block text-xs text-white">Voucher</span>
        </a>
        <a href="{{ route('profile.index') }}"
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-2 hover:scale-110 duration-300"
           activeClass="dark:text-gray-100 text-white">
            <i class="fa-solid fa-user text-white"></i>
            <span class="tab block text-xs text-white">Profile</span>
        </a>
    </div>
</section>
