<div
    {{ $attributes->merge(['class' => 'flex flex-1 p-2.5 items-center justify-start xl:p-5']) }}
>
    <h5 class="text-sm font-medium uppercase xsm:text-base">
        {{ $slot }}
    </h5>
</div>
