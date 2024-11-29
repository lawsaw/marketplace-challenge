<div {{ $attributes->merge(['class' => 'bg-white rounded-lg flex items-center self-stretch']) }}>
    <div class="w-10 flex flex-shrink-0 items-center justify-center">
        <svg class="w-6 h-6 fill-global-black-60">
            @include('icons.search')
        </svg>
    </div>
    <input type="text" class="w-full flex-grow outline-0 text-black" />
    <x-primitives.icon-button theme="light-blue" icon-size="small">
        @include('icons.close-modal')
    </x-primitives.icon-button>
    <x-primitives.icon-button theme="light">
        @include('icons.microphone')
    </x-primitives.icon-button>
    <x-primitives.button>
        Знайти
    </x-primitives.button>
</div>
