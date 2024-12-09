@props([
    'route' => '',
])

<div
{{--    x-data="{page: $persist('{{ $route }}')}"--}}
{{--    x-data="{page: '{{ $route }}'}"--}}
>
    {{ $slot }}
</div>
