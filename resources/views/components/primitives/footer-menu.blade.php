@props([
    'links' => [['href' => '', 'label' => '']],
])

<div {{ $attributes->merge(['class' => ""]) }}>
    <h3 class="text-xs text-global-black-60 font-bold">{{ $slot }}</h3>
    <ul class="mt-2 space-y-2">
        @foreach($links as $link)
            <li class="flex">
                <x-primitives.button theme="link" href="{{ $link['href'] }}">
                    {{ $link['label'] }}
                </x-primitives.button>
            </li>
        @endforeach
    </ul>
</div>
