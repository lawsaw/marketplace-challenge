@props([
    'href' => null,
    'theme' => 'primary',
    'icon' => null,
])

@php
    $tag = $href ? 'a' : 'button';
    $themeClasses = [
        'primary' => 'bg-primary text-white hover:bg-opacity-90',
        'primary-outline' => 'border border-primary text-primary hover:bg-opacity-90',
        'secondary' => 'bg-meta-3 text-white hover:bg-opacity-90',
        'secondary-outline' => 'border border-meta-3 text-meta-3 hover:bg-opacity-90',
        'black' => ' bg-black text-white hover:bg-opacity-90',
        'black-outline' => 'border border-black text-black hover:bg-opacity-90',
        'grey' => 'border border-stroke bg-gray hover:bg-opacity-70 dark:border-strokedark dark:bg-meta-4 dark:hover:bg-opacity-70',
    ];
    $themeClass = $themeClasses[$theme] ?? $themeClasses['primary'];
@endphp

<{{ $tag }}
    {{ $attributes->merge([
        'class' => "gap-2.5 transition-colors duration-200 flex items-center justify-center space-x-3 text-center font-medium rounded-md px-10 py-4 lg:px-8 xl:px-10 disabled:opacity-50 disabled:pointer-events-none {$themeClass}",
        'href' => $href ?? null
    ]) }}
>
    @isset($icon)
        <span>
            @include($icon)
        </span>
    @endisset
    {{ $slot }}
</{{ $tag }}>
