@props([
    'type' => 'text',
])

<div
    {{ $attributes->merge(['class' => 'truncate flex flex-1 items-center justify-start p-2.5 xl:p-5']) }}
>
    @if($type === 'actions')
        <div class="flex items-center justify-end space-x-3.5 w-full">
            {{ $slot }}
        </div>
    @else
        <h5 class="text-ellipsis overflow-hidden font-medium text-black dark:text-white">
            {{ $slot }}
        </h5>
    @endif
</div>
