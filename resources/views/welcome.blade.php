<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="min-h-screen flex flex-col">
    <header class="bg-global-black h-[72px] grid items-center">
        <x-primitives.viewport>
            <div class="flex justify-between">
                <div class="flex flex-grow mr-2 md:mr-4 xl:mr-6">
                    <div class="mr-2 md:mr-4">
                        <x-primitives.icon-button>
                            @include('icons.menu')
                        </x-primitives.icon-button>
                    </div>
                    <div class="mr-4 md:mr-6">
                        <x-logo></x-logo>
                    </div>
                    <div class="hidden lg:flex mr-4">
                        <x-primitives.button theme="outline">
                            <x-slot:icon>
                                @include('icons.catalog')
                            </x-slot:icon>
                            Каталог
                        </x-primitives.button>
                    </div>
                    <div class="flex-grow">
                        <x-search-field></x-search-field>
                    </div>
                </div>
                <div class="flex items-center md:space-x-2 xl:space-x-4">
                    <div class="hidden md:block">
                        <x-language-switcher></x-language-switcher>
                    </div>
                    <?php
                        $headerButtons = [
                            ['href' => '', 'icon' => 'icons.orders', 'counter' => 0, 'visible' => false],
                            ['href' => '', 'icon' => 'icons.simple-bell', 'counter' => 2, 'visible' => false],
                            ['href' => '', 'icon' => 'icons.compare', 'counter' => 0, 'visible' => false],
                            ['href' => '', 'icon' => 'icons.heart-empty', 'counter' => 0, 'visible' => false],
                            ['href' => '', 'icon' => 'icons.basket', 'counter' => 0, 'visible' => true],
                        ]
                    ?>
                    @foreach($headerButtons as $headerButton)
                        <div class="{{ !$headerButton['visible'] ? 'hidden' : '' }} md:block">
                            <x-primitives.icon-button counter="{{ $headerButton['counter'] }}">
                                @include($headerButton['icon'])
                            </x-primitives.icon-button>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-primitives.viewport>
    </header>
    <main class="bg-white flex-grow">
        <x-primitives.viewport>
            main
        </x-primitives.viewport>
    </main>
    <footer class="bg-global-black-5 text-global-black-60 py-6">
        <x-primitives.viewport>
            <div class="md:flex lg:block xl:flex">
                <div class="pb-4 border-b border-global-black-20 md:border-0 md:w-1/3 lg:w-auto lg:border-b xl:border-0 xl:w-1/5">
                    <div class="flex flex-col items-center space-y-4 md:items-start lg:flex-row lg:space-y-0 lg:space-x-4 xl:flex-col xl:space-y-4 xl:space-x-0">
                        <x-primitives.button theme="link" icon-size="small">
                            <x-slot:icon>
                                @include('icons.clock')
                            </x-slot:icon>
                            Графік роботи Call-центру
                        </x-primitives.button>
                        <x-socials></x-socials>
                    </div>
                </div>
                <div class="mt-4 space-y-4 flex-wrap md:space-y-0 md:mt-1 md:flex md:gap-y-4 md:w-2/3 lg:w-auto lg:mt-4 xl:mt-0 xl:w-4/5">
                    <?php
                        $footerMenuBlocks = [
                            'footer-menu-info',
                            'footer-menu-help',
                            'footer-menu-services',
                            'footer-menu-partners',
                        ]
                    ?>
                    @foreach($footerMenuBlocks as $footerMenuBlock)
                        <div class="md:w-2/4 lg:w-1/4">
                            @component('components.' . $footerMenuBlock)
                            @endcomponent
                        </div>
                    @endforeach
                </div>
            </div>
        </x-primitives.viewport>
    </footer>
</div>
</body>
</html>
