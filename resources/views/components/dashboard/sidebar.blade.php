<aside
    :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark -translate-x-full lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false"
>
    <?php
    $links = [
        ['href' => route('dashboard'), 'label' => 'Dashboard', 'icon' => 'icons.dashboard.home'],
        [
            'category' => 'products', 'label' => 'Products', 'icon' => 'icons.dashboard.table', 'subLinks' => [
            ['href' => route('dashboard-products'), 'label' => 'List'],
            ['href' => route('dashboard-product-create'), 'label' => 'Create'],
        ]
        ],
    ];
    ?>
        <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <x-logo-full></x-logo-full>
        <button
            class="block fill-current lg:hidden"
            @click.stop="sidebarToggle = !sidebarToggle"
        >
            @include('icons.dashboard.arrow-left')
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div
        class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
    >
        <!-- Sidebar Menu -->
        <nav
            class="mt-5 px-4 py-4 lg:mt-9 lg:px-6"
            x-data="{
                category: $persist('Dashboard'),
                page: $persist(window.location.href),
            }"
            x-init="$watch('page', value => console.log({ page: value }))"
            x-init="$watch('category', value => console.log({ category: value }))"
        >
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">

                    @foreach($links as $link)
                        <li>
                            <x-dashboard.menu-item
                                :href="$link['href'] ?? null"
                                :category="$link['category'] ?? null"
                                :subLinks="$link['subLinks'] ?? []"
                            >
                                @include($link['icon'])
                                {{ $link['label'] }}
                            </x-dashboard.menu-item>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
