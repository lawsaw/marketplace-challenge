<?php
    $links = [
        ['href' => '/', 'icon' => 'icons.facebook'],
        ['href' => '/', 'icon' => 'icons.x'],
        ['href' => '/', 'icon' => 'icons.youtube'],
        ['href' => '/', 'icon' => 'icons.instagram'],
        ['href' => '/', 'icon' => 'icons.viber'],
        ['href' => '/', 'icon' => 'icons.telegram'],
    ];
?>

<div class="flex space-x-3">
    @foreach($links as $link)
        <a href="{{ $link['href'] }}" class="block fill-global-black-60 hover:fill-global-black">
            <svg class="w-6 h-6 transition-colors duration-200">@include($link['icon'])</svg>
        </a>
    @endforeach
</div>
