<div class="my-1 flex items-center">
    <input id="{{ $id }}" type="radio" name="{{ $name ?? '' }}" class="w-4 h-4 bg-gray-50 border focus:outline-none focus:border-[#0BA2D4] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
           placeholder="{{ $placeholder ?? '' }}" value="{{ $value ?? '' }}" required>
    @if($label)
        @include($label, ['label' => $title, 'id' => $id])
    @endif
</div>
