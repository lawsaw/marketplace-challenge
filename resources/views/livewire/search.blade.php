<div
    x-data="{
        history: @entangle('history'),
        dropdownOpened: false,
        canDropdownBeOpened() {
            return this.history.length > 0;
        },
        closeDropdown() {
            this.dropdownOpened = false;
        }
    }"
>
    <div
        class="bg-white flex items-center self-stretch rounded-lg z-10"
        :class="{'rounded-bl-none rounded-br-none md:rounded-br-lg': dropdownOpened, 'absolute inset-x-2 lg:relative lg:inset-0': dropdownOpened}"
    >
        <div
            @click.away="closeDropdown"
            class="relative flex items-center self-stretch flex-grow"
        >
            <div class="w-10 flex flex-shrink-0 items-center justify-center">
                <svg class="w-6 h-6 fill-global-black-60">
                    @include('icons.search')
                </svg>
            </div>
            <input
                wire:model.live.debounce="request"
                @click="dropdownOpened = canDropdownBeOpened()"
                type="text"
                class="w-full flex-grow outline-0 text-black"
            />
            @if($request)
                <x-primitives.icon-button
                    wire:click="clear"
                    theme="light-blue"
                    icon-size="small"
                >
                    @include('icons.close-modal')
                </x-primitives.icon-button>
            @endif
            <x-primitives.icon-button theme="light">
                @include('icons.microphone')
            </x-primitives.icon-button>
            <template x-if="dropdownOpened">
                <div class="bg-white text-global-black absolute inset-x-0 top-full border-t border-global-black-10 rounded-b-md py-2">
                    <div class="flex items-center justify-between px-4 h-8">
                        <div class="text-global-black-60 text-2xs">Історія пошуку</div>
                        <x-primitives.button
                            theme="text"
                            wire:click="clearHistory"
                            @click="dropdownOpened = false"
                        >
                            Очистити список
                        </x-primitives.button>
                    </div>
                    <ul>
                        <template x-for="(historyItem, index) in history" :key="index">
                            <li class="flex items-center px-4 h-8 relative">
                                <svg class="w-6 h-6 fill-global-black-20 mr-4">
                                    @include('icons.search')
                                </svg>
                                <x-primitives.button
                                    wire:click="submit(historyItem)"
                                    @click="closeDropdown"
                                    theme="link"
                                    class="absolute inset-0 pl-14 w-full !justify-start !text-global-black hover:!text-global-red hover:bg-global-black/5"
                                >
                                    <span x-text="historyItem"></span>
                                </x-primitives.button>
                            </li>
                        </template>
                    </ul>
                </div>
            </template>
        </div>
        <div class="hidden md:block">
            <x-primitives.button
                wire:click="submit"
                @click="closeDropdown"
            >
                Знайти
            </x-primitives.button>
        </div>
    </div>
    <template x-if="dropdownOpened">
        <div class="bg-black/50 fixed inset-0"></div>
    </template>
</div>
