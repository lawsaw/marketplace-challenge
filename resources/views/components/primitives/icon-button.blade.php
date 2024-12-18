@props([
    'href' => null,
    'theme' => 'dark',
    'iconSize' => 'medium',
    'counter' => "0",
])

@php
    $tag = $href ? 'a' : 'button';
    $themeClasses = [
        'dark' => 'fill-white hover:bg-white/20 hover:active:bg-white/25',
        'light' => 'fill-global-black-40 hover:fill-link-hover',
        'light-blue' => 'fill-global-blue hover:fill-link-hover',
    ];
    $iconSizeClasses = [
        'small' => 'w-4 h-4',
        'medium' => 'w-6 h-6',
    ];
    $themeClass = $themeClasses[$theme] ?? $themeClasses['dark'];
    $iconSizeClass = $iconSizeClasses[$iconSize] ?? $iconSizeClasses['medium'];
@endphp

<{{ $tag }} {{ $attributes->merge([
        'class' => "relative w-10 h-10 flex items-center justify-center rounded flex-shrink-0 {$themeClass}",
        'href' => $href ?? null
    ]) }}>
    <svg class="{{ $iconSizeClass }}">
        {{ $slot }}
    </svg>
    @if($counter !== "0")
        <div class="absolute right-[-4px] top-[-4px] text-white h-[20px] min-w-[20px] text-xs bg-global-green rounded-full flex items-center justify-center">
            {{ $counter }}
        </div>
    @endif
</{{ $tag }}>
