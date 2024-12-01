<div class="flex items-center">
    @isset($icon)
        <svg class="w-6 h-6 fill-global-black-60 flex-shrink-0 mr-4">
            {{ $icon }}
        </svg>
    @endisset
    {{ $slot }}
</div>
