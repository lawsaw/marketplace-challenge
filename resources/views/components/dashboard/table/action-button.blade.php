@props([
    'href' => null,
])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }}
    {{ $attributes->merge([
        'class' => "hover:text-primary",
        'href' => $href ?? null
    ]) }}
>
    {{ $slot }}
</{{ $tag }}>
