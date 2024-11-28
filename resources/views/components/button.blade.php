@props([
    'theme' => 'primary',
])

@php
    $themeClasses = [
        'primary' => 'text-white bg-global-green hover:bg-global-green-light hover:active:bg-global-green',
        'outline' => 'text-white bg-transparent border border-white hover:bg-white/40 hover:active:bg-white/50',
    ];
    $themeClass = $themeClasses[$theme] ?? $themeClasses['primary'];
@endphp

<button {{ $attributes->merge(['class' => "px-4 h-[40px] rounded-lg transition-colors duration-200 flex items-center space-x-3 {$themeClass}"]) }}>
    @isset($icon)
        <svg class="w-[24px] h-[24px] fill-white">
            {{ $icon }}
        </svg>
    @endisset
    <span>{{ $slot }}</span>
</button>
