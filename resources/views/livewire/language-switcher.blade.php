<div
    class="relative"
    x-data="{
        popupOpened: false,
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
        <div class="uppercase">{{ $currentLanguage->label }}</div>
        <svg
            class="w-6 h-6 fill-white transition-transform"
            :class="{'transform rotate-180': popupOpened}"
        >
            @include('icons.chevron-down')
        </svg>
    </button>
    <div
        x-transition
        x-show="popupOpened"
        class="absolute right-full top-0 py-2 rounded-md bg-white w-[120px] text-global-black shadow"
    >
        <ul>
            @foreach($languages as $language)
                <li>
                    <button
                        wire:click="changeLanguage('{{$language->id}}')"
                        @click="closePopup"
                        class="h-10 w-full flex items-center justify-between px-4 text-sm uppercase hover:bg-global-black-10 hover:active:bg-global-black-20 transition-colors"
                    >
                        <span>{{ $language->label }}</span>
                        @if ($currentLanguage->id === $language->id)
                            <svg class="w-6 h-6">
                                @include('icons.green-check')
                            </svg>
                        @endif
                    </button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
