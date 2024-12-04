@props([
    'href' => null,
    'theme' => 'primary',
    'iconSize' => 'medium',
])

@php
    $tag = $href ? 'a' : 'button';
    $themeClasses = [
        'primary' => 'px-4 h-10 rounded-lg text-white fill-white bg-global-green hover:bg-global-green-light hover:active:bg-global-green',
        'outline' => 'px-4 h-10 rounded-lg text-white fill-white bg-transparent border border-white hover:bg-white/40 hover:active:bg-white/50',
        'text' => 'px-0 text-sm text-global-blue fill-global-blue hover:text-link-hover hover:fill-link-hover',
        'link' => 'px-0 text-sm text-global-black text-global-blue fill-global-blue hover:text-global-red hover:fill-global-red hover:underline',
    ];
    $iconSizeClasses = [
        'small' => 'w-4 h-4',
        'medium' => 'w-6 h-6',
    ];
    $themeClass = $themeClasses[$theme] ?? $themeClasses['primary'];
    $iconSizeClass = $iconSizeClasses[$iconSize] ?? $iconSizeClasses['medium'];
@endphp

<{{ $tag }} {{ $attributes->merge([
        'class' => "transition-colors duration-200 flex items-center justify-center space-x-3 {$themeClass}",
        'href' => $href ?? null
    ]) }}>
    @isset($icon)
        <svg class="{{ $iconSizeClass }}">
            {{ $icon }}
        </svg>
    @endisset
    <span class="truncate">{{ $slot }}</span>
</{{ $tag }}>
