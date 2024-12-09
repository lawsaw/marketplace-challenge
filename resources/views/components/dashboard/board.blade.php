@props([
    'title' => null,
])

<div
    {{ $attributes->merge([
        'class' => 'rounded-sm border border-stroke bg-white p-5 sm:p-7.5  shadow-default dark:border-strokedark dark:bg-boxdark'
    ]) }}
>
    @isset($title)
        <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
            {{ $title }}
        </h4>
    @endisset

    <div class="overflow-x-auto">
        {{ $slot }}
    </div>
</div>
