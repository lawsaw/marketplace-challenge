@props([
    'links' => [['href' => '', 'label' => '']],
])

<div {{ $attributes->merge(['class' => ""]) }}>
    <h3 class="text-xs text-global-black-60 font-bold">{{ $slot }}</h3>
    <ul class="mt-2 space-y-2">
        @foreach($links as $link)
            <li class="block">
                <a
                    href="{{ $link['href'] }}"
                    class="block text-sm text-global-blue hover:underline hover:text-link-hover"
                >
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
