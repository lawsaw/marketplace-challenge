<x-layouts.app>
    <div class="mt-4 mb-2">
        <x-breadcrumbs></x-breadcrumbs>
    </div>
    <h1 class="mt-4 text-2xl lg:text-4xl font-bold">Catalog</h1>
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
            class="fixed inset-0 z-30 bg-black/50 lg:hidden"
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
                    lg:sticky lg:top-[129px] lg:max-h-[calc(100vh-129px-8px)] lg:overflow-y-auto
                "
            >Sidebar</div>
        </div>
        <div class="w-full lg:w-[calc(100%-250px)] pt-4 lg:p-4">
            <div>
                @foreach($products as $product)
                    <a href="/products/{{ $product->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                        <div class="font-bold text-500-blue text-sm">{{ $product->title }}</div>
                        <div>
                            <strong class="text-laracasts">{{ $product->price }}</strong>
                        </div>
                    </a>
                @endforeach
            </div>
            <div>{{ $products->links() }}</div>
        </div>
    </div>
</x-layouts.app>
