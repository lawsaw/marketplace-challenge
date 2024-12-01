@php
    use App\Helpers;

    $slots = Helpers::getSlotsArray($__data);
@endphp

<div class="border border-global-black-10 rounded-lg divide-y divide-global-black-10">
    @foreach($slots as $slot)
        <div class="px-4 py-3">
            {{ $slot }}
        </div>
    @endforeach
</div>
