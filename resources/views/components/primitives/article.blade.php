<div class="text-sm">
    @isset($title)
        <h2 class="mb-4 text-2xl">
            {{ $title }}
        </h2>
    @endisset
    <div class="article">
        {{ $slot }}
    </div>
</div>
