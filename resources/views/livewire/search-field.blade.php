<div
    x-data="{
        request: @entangle('request'),
        get dropdownOpened() {
            return !!this.request?.length;
        },
        closeDropdown() {
            this.request = '';
            setTimeout(() => {
                @this.call('clearRequest');
            }, 10);
        }
    }"
>
    <div
        class="bg-white flex items-center self-stretch rounded-lg z-10"
        :class="{'rounded-bl-none rounded-br-none md:rounded-br-lg absolute inset-x-2 lg:relative lg:inset-0': dropdownOpened}"
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
                type="text"
                class="w-full flex-grow outline-0 text-black"
            />
            @if($request)
                <x-primitives.icon-button
                    wire:click="clearRequest"
                    theme="light-blue"
                    icon-size="small"
                >
                    @include('icons.close-modal')
                </x-primitives.icon-button>
            @endif
            <x-primitives.icon-button theme="light">
                @include('icons.microphone')
            </x-primitives.icon-button>
            <div
                x-transition
                x-show="dropdownOpened"
                class="bg-white text-global-black absolute inset-x-0 top-full border-t border-global-black-10 rounded-b-md py-2"
            >
                <div wire:loading class="w-full relative p-6">
                    <x-primitives.loader></x-primitives.loader>
                </div>
                <div wire:loading.remove>
                    <div class="flex items-center justify-between px-4 h-8">
                        <div class="text-global-black-60 text-2xs">
                            @if(count($results))
                                Results
                            @else
                                No results
                            @endif
                        </div>
                    </div>
                    @if(count($results))
                        <ul>
                            @foreach($results as $result)
                                <li wire:key="{{ $result->id }}" class="flex items-center px-4 h-8 relative">
                                    <svg class="w-6 h-6 fill-global-black-20 mr-4">
                                        @include('icons.search')
                                    </svg>
                                    <x-primitives.button
                                        wire:navigate
                                        href="/products/{{ $result->id }}"
                                        theme="link"
                                        class="absolute inset-0 !pl-14 w-full !justify-start !text-global-black hover:!text-global-red hover:bg-global-black/5"
                                    >
                                        <span>{{ $result->title }}</span>
                                    </x-primitives.button>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="hidden md:block">
            <x-primitives.button
                wire:click="submit"
                @click="closeDropdown"
            >
                Search
            </x-primitives.button>
        </div>
    </div>
    <template x-if="dropdownOpened">
        <div class="bg-black/50 fixed inset-0"></div>
    </template>
</div>
