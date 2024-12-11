@php use Illuminate\Support\Facades\Auth; @endphp

<header class="bg-global-black h-[72px] grid items-center sticky top-0 z-20">
    <x-primitives.viewport>
        <div class="flex justify-between">
            <div class="flex flex-grow mr-2 md:mr-4 xl:mr-6">
                <div class="mr-2 md:mr-4">
                    <x-primitives.icon-button @click.stop="sidebarMenuToggle = !sidebarMenuToggle">
                        @include('icons.menu')
                    </x-primitives.icon-button>
                </div>
                <div class="mr-4 md:mr-6">
                    <x-logo></x-logo>
                </div>
                <div class="hidden lg:flex mr-4">
                    <x-primitives.button theme="outline" href="/products">
                        <x-slot:icon>
                            @include('icons.catalog')
                        </x-slot:icon>
                        Catalog
                    </x-primitives.button>
                </div>
                <div class="flex-grow">
                    @livewire('search-field')
                </div>
            </div>
            <div class="flex items-center md:space-x-2 xl:space-x-4">
                <div class="hidden md:block">
                    @livewire('language-switcher')
                </div>
                <?php
                $headerButtons = [
//                    ['href' => '', 'icon' => 'icons.orders', 'counter' => 0, 'visible' => false],
//                    ['href' => '', 'icon' => 'icons.simple-bell', 'counter' => 2, 'visible' => false],
//                    ['href' => '', 'icon' => 'icons.compare', 'counter' => 0, 'visible' => false],
//                    ['href' => '', 'icon' => 'icons.heart-empty', 'counter' => 0, 'visible' => false],
                    ['href' => '', 'icon' => 'icons.basket', 'counter' => 0, 'visible' => true],
                ]
                ?>
                @foreach($headerButtons as $headerButton)
                    <div class="{{ !$headerButton['visible'] ? 'hidden' : '' }} md:block">
                        <x-primitives.icon-button href="{{ $headerButton['href'] }}" counter="{{ $headerButton['counter'] }}">
                            @include($headerButton['icon'])
                        </x-primitives.icon-button>
                    </div>
                @endforeach


                @guest
                    <div>
                        <x-primitives.icon-button href="{{ route('login') }}">
                            @include('icons.user-simple')
                        </x-primitives.icon-button>
                    </div>
                @endguest
                @auth
                    <div class="text-white">
                        Welcome, {{ Auth::user()->name }} (<a href="{{ route('logout') }}" class="font-semibold underline hover:no-underline">logout</a>)
                    </div>
                @endauth
            </div>
        </div>
    </x-primitives.viewport>
</header>
