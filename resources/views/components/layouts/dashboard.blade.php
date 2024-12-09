<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.dashboard.css', 'resources/js/app.js'])
</head>
<body
    x-data="{ 'darkMode': true, 'sidebarToggle': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
>
<div class="flex h-screen overflow-hidden">
    <x-dashboard.sidebar></x-dashboard.sidebar>
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <x-dashboard.header></x-dashboard.header>
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
</body>
</html>
