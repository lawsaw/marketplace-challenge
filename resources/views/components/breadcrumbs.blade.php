<?php
    $links = [
        ['href' => '/', 'label' => 'Комп\'ютери та ноутбуки'],
        ['href' => '/', 'label' => 'Товари для геймерів'],
        ['href' => '/', 'label' => 'Ігрові консолі та дитячі приставки'],
        ['href' => '/', 'label' => 'Ігрові консолі та дитячі приставки Sony PlayStation'],
    ]
?>

<ul class="flex text-global-black text-sm flex-wrap">
    <li>
        <a href="/" class="block transition-colors duration-200 fill-global-blue hover:fill-global-red">
            <svg class="w-4 h-4">
                @include('icons.home')
            </svg>
        </a>
    </li>
    @foreach($links as $link)
        <li class="hidden items-center before:content-['/'] before:mx-1 before:text-global-black-40 last:flex lg:flex">
            <x-primitives.button theme="link" href="{{ $link['href'] }}">
                {{ $link['label'] }}
            </x-primitives.button>
        </li>
    @endforeach
</ul>
