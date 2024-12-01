<div
    class="relative"
    x-data="{
        popupOpened: false,
        currentLanguage: @entangle('currentLanguage'),
        closePopup() {
            this.popupOpened = false;
        }
    }"
    @click.away="closePopup"
>
    <button
        class="h-10 text-white flex items-center gap-2"
        @click="popupOpened=!popupOpened"
    >
        <div class="uppercase" x-text="currentLanguage"></div>
        <svg
            class="w-6 h-6 fill-white transition-transform"
            :class="{'transform rotate-180': popupOpened}"
        >
            @include('icons.chevron-down')
        </svg>
    </button>
    <template x-if="popupOpened" x-transition>
        <div
            x-transition
            class="absolute right-full top-0 py-2 rounded-md bg-white w-[120px] text-global-black shadow"
        >
            <ul>
                @foreach($languages as $language)
                    <li>
                        <button
                            wire:click="changeLanguage('{{$language}}')"
                            @click="closePopup"
                            class="h-10 w-full flex items-center justify-between px-4 text-sm uppercase hover:bg-global-black-10 hover:active:bg-global-black-20 transition-colors"
                        >
                            <span>{{ $language }}</span>
                            <template x-if="currentLanguage === '{{$language}}'">
                                <svg class="w-6 h-6">
                                    @include('icons.green-check')
                                </svg>
                            </template>
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </template>
</div>
