<div
    class="relative z-20"
>
    <div
        x-transition.opacity.duration.300ms
        x-show="sidebarToggle"
        class="fixed inset-0 bg-black/50"
    ></div>
    <div
        @click.away="sidebarToggle = false"
        class="fixed inset-y-0 left-0 w-[320px] bg-white text-global-black transition-all -translate-x-full"
        :class="{ '!translate-x-0': sidebarToggle }"
    >
        <div class="flex flex-col h-full">
            <div class="bg-global-black px-4 py-2 flex items-center justify-between shrink-0">
                <x-logo-full height="24px"></x-logo-full>
                @livewire('language-switcher')
                <x-primitives.icon-button @click="sidebarToggle = false">
                    @include('icons.close-modal')
                </x-primitives.icon-button>
            </div>
            <div class="grow divide-y p-4">

                <div class="py-4">
                    @guest
                        <x-primitives.button href="{{ route('login') }}" class="w-full">
                            Login
                        </x-primitives.button>
                    @endguest
                    @auth
                        <div>
                            Welcome, {{ Auth::user()->name }} (<a href="{{ route('logout') }}" class="font-semibold underline hover:no-underline">logout</a>)
                        </div>
                        <div class="mt-2">
                            You have access to the <a href="{{ route('dashboard') }}" class="font-semibold underline hover:no-underline">Dashboard</a>
                        </div>
                    @endauth
                </div>
            </div>
            <div class="shrink-0 p-4 border-t border-global-black-10">
                <x-socials></x-socials>
            </div>
        </div>
    </div>
</div>
