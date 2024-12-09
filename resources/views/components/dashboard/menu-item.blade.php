@props([
    'href' => null,
    'category' => null,
    'subLinks' => [],
])

@php
    $tag = $href ? 'a' : 'button';
    $subLinksCondition = collect($subLinks)
        ->pluck('href')
        ->map(fn($subHref) => "(page === '{$subHref}')")
        ->implode(' || ');
    $category = $href ?: $category;
@endphp

<div>
    <{{ $tag }}
        wire:navigate
        class="w-full group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ $href }}"
        @if($href)
            @click.prevent="page = '{{ $category }}'"
            :class="{
                'bg-graydark dark:bg-meta-4': (page === '{{ $href }}')
            }"
        @else
            @click.prevent="category = (category === '{{ $category }}' ? '' : '{{ $category }}')"
            :class="{
                'bg-graydark dark:bg-meta-4': (category === '{{ $category }}')
                @if($subLinksCondition) || {{ $subLinksCondition }} @endif
            }"
        @endif
    >
        {{ $slot }}

        @if(count($subLinks))
            <span
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (category === '{{ $category }}') }"
            >
                @include('icons.dashboard.chevron')
            </span>
        @endif
    </{{ $tag }}>

    @if(count($subLinks))
        <div
            class="translate transform overflow-hidden"
            :class="(category === '{{ $category }}') ? 'block' :'hidden'"
        >
            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                @foreach($subLinks as $subLink)
                    <li>
                        <a
                            wire:navigate
                            class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                            href="{{ $subLink['href'] }}"
                            @click.prevent="page = '{{ $subLink['href'] }}'"
                            :class="{
                                '!text-white': (page === '{{ $subLink['href'] }}')
                            }"
                        >{{ $subLink['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
