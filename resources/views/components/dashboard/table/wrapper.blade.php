@props([
    'title' => null,
    'minWidth' => '100px',
])

<div
    {{ $attributes->merge([
        'class' => 'rounded-sm border border-stroke bg-white pt-6 shadow-default dark:border-strokedark dark:bg-boxdark'
    ]) }}
>
    @isset($title)
        <h4 class="mb-6 text-xl font-bold text-black px-5 sm:px-7.5 dark:text-white">
           {{ $title }}
        </h4>
    @endisset

    <div class="overflow-x-auto px-5 sm:px-7.5 pb-2.5 xl:pb-1">
        <div class="min-w-[{{ $minWidth }}] flex flex-col">
            {{ $slot }}
        </div>
    </div>

</div>
