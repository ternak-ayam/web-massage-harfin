<button {{ isset($formaction) ? 'formaction='.$formaction : null }}
        type="{{ $type ?? 'button' }}"
        {{ isset($formmethod) ? 'formmethod='.$formmethod : null }}
        class="{{ $class ?? '' }} rounded-lg bg-red-500 px-6 py-2.5 text-center my-1 text-sm font-medium capitalize leading-5 text-white hover:scale-105 duration-300 focus:outline-none lg:mx-0">
    {{ $title }}
</button>
