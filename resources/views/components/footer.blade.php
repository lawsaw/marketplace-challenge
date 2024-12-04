<footer class="bg-global-black-5 text-global-black-60 py-6">
    <x-primitives.viewport>
        <div class="md:flex lg:block xl:flex">
            <div class="pb-4 border-b border-global-black-20 md:border-0 md:w-1/3 lg:w-auto lg:border-b xl:border-0 xl:w-1/5">
                <div class="flex flex-col items-center space-y-4 md:items-start lg:flex-row lg:space-y-0 lg:space-x-4 xl:flex-col xl:space-y-4 xl:space-x-0">
                    <x-primitives.button theme="text" icon-size="small">
                        <x-slot:icon>
                            @include('icons.clock')
                        </x-slot:icon>
                        Графік роботи Call-центру
                    </x-primitives.button>
                    <x-socials></x-socials>
                </div>
            </div>
            <div class="mt-4 space-y-4 flex-wrap md:space-y-0 md:mt-1 md:flex md:gap-y-4 md:w-2/3 lg:w-auto lg:mt-4 xl:mt-0 xl:w-4/5">
                <?php
                $footerMenuBlocks = [
                    'footer-menu-info',
                    'footer-menu-help',
                    'footer-menu-services',
                    'footer-menu-partners',
                ]
                ?>
                @foreach($footerMenuBlocks as $footerMenuBlock)
                    <div class="md:w-2/4 lg:w-1/4">
                        @component('components.' . $footerMenuBlock)
                        @endcomponent
                    </div>
                @endforeach
            </div>
        </div>
    </x-primitives.viewport>
</footer>
