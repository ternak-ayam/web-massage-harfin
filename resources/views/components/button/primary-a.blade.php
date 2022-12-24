<a target="{{ $target ?? '' }}" href="{{ $href ?? '' }}" id="{{ $id ?? rand() }}" class="{{ $class ?? '' }} {{ isset($withoutBg) && $withoutBg ? 'bg-white border border-primary' : 'bg-[#0BA2D4] text-white ' }} mx-1 rounded-lg my-auto px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 hover:scale-105 duration-300 focus:outline-none lg:mx-1">
    {{ $title }}
</a>
