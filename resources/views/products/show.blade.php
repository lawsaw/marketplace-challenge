<x-layouts.app>
    <x-breadcrumbs></x-breadcrumbs>
    <div class="mt-4">
        <x-primitives.tab>
            <x-slot:slot1 name="Усе про товар">

                <div class="md:flex">
                    <div class="md:w-1/2 md:mr-8">
                        <x-gallery></x-gallery>
                    </div>
                    <div class="mt-4 flex flex-col gap-4 md:mt-0 md:w-1/2 md:ml-8">

                        <h1 class="text-base">
                            {{ $product->title }}
                        </h1>
                        <div class="flex justify-between">
                            <x-primitives.button theme="link">
                                Leave a feedback
                            </x-primitives.button>
                            <div class="text-global-black-60 text-sm">
                                Код: 460316339
                            </div>
                        </div>
                        <x-primitives.description-box>
                            <x-slot:slot1 name="seller">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-baseline">
                                        <div class="pr-1">Seller:</div>
                                        <x-primitives.button theme="link">
                                            RM Store
                                        </x-primitives.button>
                                    </div>
                                    <x-primitives.button theme="text">
                                        Put a question
                                    </x-primitives.button>
                                </div>
                            </x-slot:test>
                            <x-slot:slot2 name="price">

                                @if($product->sold)
                                    <div class="flex justify-between items-center gap-2 xl:gap-4">
                                        <div class="text-global-red uppercase text-3xl font-bold">Sold</div>
                                        <div class="flex justify-end">
                                            <x-primitives.icon-button theme="light">
                                                @include('icons.compare')
                                            </x-primitives.icon-button>
                                            <x-primitives.icon-button theme="light">
                                                @include('icons.heart-empty')
                                            </x-primitives.icon-button>
                                        </div>
                                    </div>
                                @else
                                    <div class="grid gap-2 items-center grid-cols-2 grid-rows-2 xl:grid-rows-1 xl:grid-cols-[max-content_max-content_max-content] xl:gap-4">
                                        <div class="col-span-1">
                                            <div>
                                                <div class="text-global-green text-sm">In stock</div>
                                                <div class="text-3xl font-bold">
                                                    {{ $product->price }}
                                                    <span class="text-base">₴</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-2 row-start-2 xl:row-start-1 xl:col-start-2">
                                            <div class="">
                                                <x-primitives.button class="w-full">
                                                    <x-slot:icon>
                                                        @include('icons.basket')
                                                    </x-slot:icon>
                                                    Buy
                                                </x-primitives.button>
                                            </div>
                                        </div>
                                        <div class="col-span-1 row-start-1 col-start-2 xl:col-span-3">
                                            <div class="flex justify-end xl:justify-start">
                                                <x-primitives.icon-button theme="light">
                                                    @include('icons.compare')
                                                </x-primitives.icon-button>
                                                <x-primitives.icon-button theme="light">
                                                    @include('icons.heart-empty')
                                                </x-primitives.icon-button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </x-slot:test2>
                        </x-primitives.description-box>

                        <x-primitives.description-box>
                            <x-slot:slot1 name="delivery">
                                <x-primitives.iconed-label>
                                    <x-slot:icon>
                                        @include('icons.map-marker')
                                    </x-slot:icon>
                                    <span class="gap-symbol">
                                        <span>Delivery</span>
                                        <span class="font-bold">Kyiv</span>
                                    </span>
                                </x-primitives.iconed-label>
                            </x-slot:slot1>
                            <x-slot:slot2 name="payment">
                                <x-primitives.iconed-label>
                                    <x-slot:icon>
                                        @include('icons.wallet')
                                    </x-slot:icon>
                                    <span class="gap-symbol">
                                        <span class="font-bold">Payment.</span>
                                        <span>Payment upon receipt of the goods, Payment by card at the branch, Apple Pay, Card online, -7% discount when paying from 1500 UAH with a Visa "Universal"/premium card from PrivatBank, Google Pay.</span>
                                    </span>
                                </x-primitives.iconed-label>
                            </x-slot:slot2>
                            <x-slot:slot3 name="warranty">
                                <x-primitives.iconed-label>
                                    <x-slot:icon>
                                        @include('icons.warranty')
                                    </x-slot:icon>
                                    <span class="gap-symbol">
                                        <span class="font-bold">Warranty.</span>
                                        <span>Return of goods within 30 days</span>
                                    </span>
                                </x-primitives.iconed-label>
                            </x-slot:slot3>
                        </x-primitives.description-box>
                    </div>
                </div>
                <div class="mt-6">
                    <x-primitives.article>
                        <x-slot:title>
                            Description
                        </x-slot:title>
                        {{ $product->description }}
                    </x-primitives.article>
                </div>

            </x-slot:slot1>
            <x-slot:slot2 name="Характеристики">
                Specs
            </x-slot:slot2>
            <x-slot:slot3 name="Залишити відгук">
                Leave a feedback
            </x-slot:slot3>
            <x-slot:slot4 name="Питання">
                FAQ
            </x-slot:slot4>
        </x-primitives.tab>
    </div>
</x-layouts.app>

