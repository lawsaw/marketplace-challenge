<x-layouts.app :title="$title">
    <div class="mt-4 mb-2">
        <x-breadcrumbs></x-breadcrumbs>
    </div>
    <h1 class="mt-4 text-2xl lg:text-4xl font-bold">{{ $title }}</h1>
    @livewire('search')
</x-layouts.app>
