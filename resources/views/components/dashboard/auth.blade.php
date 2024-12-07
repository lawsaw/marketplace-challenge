@props([
    'title' => '',
])

<div>
    <div
        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
    >
        <div class="flex flex-wrap items-center">
            <div class="hidden w-full xl:block xl:w-1/2">
                <div class="px-26 py-17.5 text-center">
                    <div class="flex items-center justify-center mb-4">
                        <x-logo></x-logo>
                    </div>
                    <h2
                        class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2"
                    >
                        {{ $title }}
                    </h2>
                </div>
            </div>
            <div
                class="w-full border-stroke dark:border-strokedark xl:w-1/2 xl:border-l-2"
            >
                <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
                    <h2
                        class="xl:hidden mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2"
                    >
                        {{ $title }}
                    </h2>

                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
