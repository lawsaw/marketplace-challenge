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
        <x-viewport>
            <div class="flex justify-between">
                <div class="flex flex-grow mr-2 md:mr-4 xl:mr-6">
                    <x-icon-button class="mr-2 md:mr-4">
                        @include('icons.menu')
                    </x-icon-button>
                    <x-logo class="mr-4 md:mr-6"></x-logo>
                    <x-button theme="outline" class="hidden lg:flex mr-4">
                        <x-slot:icon>
                            @include('icons.catalog')
                        </x-slot:icon>
                        Каталог
                    </x-button>
                    <x-search-field class="flex-grow"></x-search-field>
                </div>
                <div class="flex items-center md:space-x-2 xl:space-x-4">
                    <x-language-switcher class="hidden md:flex"></x-language-switcher>
                    <x-icon-button class="hidden md:flex">
                        @include('icons.orders')
                    </x-icon-button>
                    <x-icon-button counter="2" class="hidden md:flex">
                        @include('icons.simple-bell')
                    </x-icon-button>
                    <x-icon-button class="hidden md:flex">
                        @include('icons.compare')
                    </x-icon-button>
                    <x-icon-button class="hidden md:flex">
                        @include('icons.heart-empty')
                    </x-icon-button>
                    <x-icon-button>
                        @include('icons.basket')
                    </x-icon-button>
                </div>
            </div>
        </x-viewport>
    </header>
    <main class="bg-white flex-grow">
        <x-viewport>
            <x-button>
                <x-slot:icon>
                    @include('icons.basket')
                </x-slot:icon>
                Купити
            </x-button>
        </x-viewport>
    </main>
    <footer class="bg-global-black-5 text-global-black-60 h-[72px]">
        <x-viewport>
            footer
        </x-viewport>
    </footer>
</div>
</body>
</html>
