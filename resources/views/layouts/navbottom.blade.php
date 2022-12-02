<section
    class="block fixed bottom-0 inset-x-0 z-50 shadow-lg text-gray-800 bg-gray-700 dark:bg-dark backdrop-blur-lg bg-opacity-30 dark:bg-opacity-30 dark:text-gray-400 border-t-2 border-royal/20">
    <div id="tabs" class="flex justify-between">
        <a href="{{ route('landing.index') }}"
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-1 hover:bg-white border-r-[1px]"
           activeClass="dark:text-gray-100 text-black">
            <i class="fa-solid fa-house text-black"></i>
            <span class="tab block text-xs text-black">Home</span>
        </a>
        <a href="{{ route('pemesanan.index') }}"
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-1 hover:bg-white border-r-[1px]"
           activeClass="dark:text-gray-100 text-black">
            <i class="fa-solid fa-bag-shopping text-black"></i>
            <span class="tab block text-xs text-black">Pemesanan</span>
        </a>
        <a href=""
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-1 hover:bg-white border-r-[1px]"
           activeClass="dark:text-gray-100 text-black">
            <i class="fa-solid fa-tags text-black"></i>
            <span class="tab block text-xs text-black">Voucher</span>
        </a>
        <a href="{{ route('profile.index') }}"
           class="w-full focus:text-royal hover:text-royal justify-center inline-block text-center pt-2 pb-1 hover:bg-white border-r-[1px]"
           activeClass="dark:text-gray-100 text-black">
            <i class="fa-solid fa-user text-black"></i>
            <span class="tab block text-xs text-black">Profile</span>
        </a>
    </div>
</section>
