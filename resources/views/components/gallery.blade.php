<?php
    $images = [];
    for ($index = 1; $index <= 4; $index++) {
        $images[] = "http://picsum.photos/seed/{$index}/640/480";
    }
?>

<div class="space-y-4">
    <div class="bg-white rounded-lg shadow">
        <img src="{{ $images[0] }}" alt="" class="object-cover w-full">
    </div>
    <ul class="grid grid-cols-8 gap-4">
        @foreach($images as $image)
            <li class="bg-white rounded shadow">
                <img src="{{ $image }}" alt="" class="">
            </li>
        @endforeach
    </ul>
</div>
