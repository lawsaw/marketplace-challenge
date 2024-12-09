@props([
    'title' => null,
])

<div class="mx-auto max-w-screen-2xl">
    <div
        class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
    >
        @isset($title)
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                {{ $title }}
            </h2>
        @endisset

    </div>
    <div class="flex flex-col gap-10">
        {{ $slot }}
    </div>
</div>
