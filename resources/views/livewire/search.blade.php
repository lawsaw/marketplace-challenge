<div>
    <div class="flex justify-between items-center py-4 sticky top-[72px] border-b border-global-black-10 z-10 bg-white">
        <div class="flex items-center gap-4">
            <div class="lg:hidden">
                <x-primitives.button
                    theme="secondary"
                    size="small"
                    iconSize="small"
                    @click.stop="sidebarFiltersToggle = !sidebarFiltersToggle"
                >
                    <x-slot:icon>
                        @include('icons.filter')
                    </x-slot:icon>
                    Filters
                </x-primitives.button>
            </div>
            <div class="text-sm">Found 4000 products</div>
        </div>
        <div class="text-sm">Sort</div>
    </div>
    <div class="flex">
        <div
            x-transition.opacity.duration.300ms
            x-show="sidebarFiltersToggle"
            class="fixed inset-0 z-30 bg-black/50 lg:hidden lg:z-auto"
        ></div>
        <div
            class="
                bg-white transition-all duration-275 ease-linear
                fixed left-0 top-0 bottom-0 overflow-y-auto z-30 w-[320px] -translate-x-full
                lg:static lg:w-[250px] lg:inset-auto lg:z-auto lg:overflow-y-visible lg:border-r border-global-black-10 lg:translate-x-0
            "
            :class="{ '!translate-x-0': sidebarFiltersToggle }"
            @click.outside="sidebarFiltersToggle = false"
        >
            <div
                class="
                    flex flex-col h-full lg:sticky lg:top-[129px] lg:max-h-[calc(100vh-129px-8px)] lg:overflow-y-auto
                "
            >
                <div class="lg:hidden border-b border-global-black-10 px-2">
                    <button
                        @click="sidebarFiltersToggle = false"
                        class="group flex items-center h-14 w-full text-xl text-global-black hover:text-global-red"
                    >
                        <div class="rotate-90 fill-global-blue group-hover:fill-global-red">
                            <svg class="w-6 h-6">
                                @include('icons.chevron-down')
                            </svg>
                        </div>
                        Filters
                    </button>
                </div>

                <div class="p-4 lg:pl-0 flex flex-col flex-grow lg:flex-grow-0 overflow-y-auto gap-4 lg:overflow-y-auto">
                    <x-primitives.form.range
                        label="Price"
                        minModel="minPrice"
                        maxModel="maxPrice"
                        :minAvailableValue="$minAvailablePrice"
                        :maxAvailableValue="$maxAvailablePrice"
                    />
                    <x-primitives.form.checkbox wire:model="sold" label="Sold" />
                </div>

                <div class="px-4 py-4 lg:pl-0 border-t border-global-black-10 lg:border-0">
                    <x-primitives.button
                        class="w-full"
                        size="small"
                        wire:click="applyFilters"
                    >
                        Apply
                    </x-primitives.button>
                </div>

            </div>




        </div>
        <div class="w-full lg:w-[calc(100%-250px)]">


            @if($products->isEmpty())
                <div class="p-6 text-center">There are no results</div>
            @else
                <ul class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5">
                    @foreach($products as $product)
                        <li class="border-b border-r border-gray-200">
                            <div
                                class="relative group block overflow-hidden hover:overflow-visible hover:z-10 text-global-black"
                            >
                                <div class="
                                    relative
                                    bg-white
                                    px-4 pt-6 pb-2
                                    before:content-[''] before:hidden before:absolute before:-left-0 before:-right-0 before:bottom-0 before:-top-1
                                    before:shadow-[0px_16px_16px_rgba(0,0,0,0.3)]
                                    group-hover:before:block
                                    before:pointer-events-none
                                "
                                >
                                    <a href="{{ route('product', $product->id) }}" class="h-50">
                                        <img
                                            src="http://picsum.photos/seed/10/640/480"
                                            alt="{{ $product->title }}}"
                                            class="block object-contain w-full h-full"
                                        >
                                    </a>
                                    <a
                                        href="{{ route('product', $product->id) }}"
                                        class="text-global-black text-sm h-9 overflow-hidden mt-4"
                                    >
                                        {{ $product->title }}
                                    </a>
                                    <div class="mt-4 flex items-center justify-between">
                                        <div class="text-2xl">{{ $product->price }}</div>
                                        <div>
                                            <x-primitives.icon-button href="#" theme="light">
                                                @include('icons.basket')
                                            </x-primitives.icon-button>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden relative group-hover:block">
                                    <div class="
                                    absolute px-4 pb-6 top-0 left-0 right-0 bg-white
                                    text-sm
                                    before:content-[''] before:absolute before:inset-0
                                    before:shadow-[0px_16px_16px_rgba(0,0,0,0.3)]
                                    before:pointer-events-none
                                ">
                                        <div class="line-clamp-2">
                                            {{ $product->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="py-8 pl-8">{{ $products->links() }}</div>
        </div>
    </div>
</div>
