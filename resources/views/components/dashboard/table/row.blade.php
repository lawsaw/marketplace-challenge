<div
    {{ $attributes->merge(['class' => 'flex border-b border-stroke dark:border-strokedark [&:nth-last-child(1)]:border-b-0']) }}
>
    {{ $slot }}
</div>
