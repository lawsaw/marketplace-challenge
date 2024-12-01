@php
    use App\Helpers;

    $tabs = Helpers::getSlotsArray($__data);
@endphp

<div {{ $attributes->merge(['class' => 'text-global-black']) }}>
    <div class="flex space-x-8 border-b border-global-black-10 overflow-auto m-w-xxl w-full">
        @foreach($tabs as $tab)
            <div
                class="text-sm cursor-pointer h-10 whitespace-nowrap flex items-center transition-colors duration-200 hover:text-global-green hover:shadow-[inset_0_-2px_0_0_#00a046]"
            >
                {{ $tab->attributes['name'] }}
            </div>
        @endforeach
    </div>
    <div class="mt-4">
        <?= $tabs[0] ?>
    </div>
</div>
