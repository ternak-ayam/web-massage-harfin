<div>
    @if($label)
        @include($label, ['label' => $title])
    @endif
    <input {{ isset($disabled) && $disabled ? 'disabled' : null }} type="{{ $type ?? 'text' }}" name="{{ $name ?? '' }}" class="bg-gray-50 border focus:outline-none focus:border-[#0BA2D4] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 disabled:bg-gray-100"
           placeholder="{{ $placeholder ?? '' }}" value="{{ $value ?? '' }}" required>
    @error($name ?? '')<div class="text-xs text-red-500">{{ $message }}</div>@enderror
</div>
