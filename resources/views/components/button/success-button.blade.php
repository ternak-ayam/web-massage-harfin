<button {{ isset($formaction) ? 'formaction='.$formaction : null }} type="{{ $type ?? 'button' }}" id="{{ $id ?? rand() }}" class="{{ $class ?? '' }} rounded-lg {{ isset($withoutBg) && $withoutBg ? 'bg-white border border-green-300' : 'bg-green-500 text-white ' }} my-1 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 hover:scale-105 duration-300 focus:outline-none lg:mx-0">
    {{ $title }}
</button>
