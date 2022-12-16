<div>
    @if($label)
        @include($label, ['label' => $title])
    @endif
    <textarea rows="2" {{ isset($disabled) && $disabled ? 'disabled' : null }} type="text" name="{{ $name ?? '' }}" class="bg-gray-50 border focus:outline-none focus:border-[#0BA2D4] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
              placeholder="{{ $placeholder ?? '' }}"></textarea>
</div>
