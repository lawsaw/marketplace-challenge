<div {{ $attributes->merge(['class' => 'bg-white rounded-lg flex items-center self-stretch']) }}>
    <div class="w-[40px] flex flex-shrink-0 items-center justify-center">
        <svg class="w-[24px] h-[24px] fill-global-black-60">
            @include('icons.search')
        </svg>
    </div>
    <input type="text" class="w-full flex-grow outline-0 text-black" />
    <x-icon-button theme="light-blue" icon-size="small">
        @include('icons.close-modal')
    </x-icon-button>
    <x-icon-button theme="light">
        @include('icons.microphone')
    </x-icon-button>
    <x-button>
        Знайти
    </x-button>
</div>
