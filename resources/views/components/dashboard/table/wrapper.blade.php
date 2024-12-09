@props([
    'title' => null,
])

<x-dashboard.board class="!p-0">
    <div
        {{ $attributes->merge([
                'class' => 'flex flex-col'
        ]) }}
    >
        {{ $slot }}
    </div>
</x-dashboard.board>
