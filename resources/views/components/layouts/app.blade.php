<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body
    x-data="{ sidebarMenuToggle: false, sidebarFiltersToggle: false }"
    class="font-sans antialiased dark:bg-black dark:text-white/50"
>
    <div class="min-h-screen flex flex-col">
        <x-sidebar></x-sidebar>
        <x-header></x-header>
        <main class="bg-white text-black flex-grow">
            <x-primitives.viewport>
                {{ $slot }}
            </x-primitives.viewport>
        </main>
        <x-footer></x-footer>
    </div>
    @livewireScripts
</body>
</html>
