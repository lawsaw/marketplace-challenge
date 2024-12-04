@extends('layouts.app')

@section('content')
    <x-breadcrumbs></x-breadcrumbs>
    <div class="mt-4">
        <x-primitives.tab>
            <x-slot:slot1 name="Усе про товар">

                <div class="md:flex">
                    <div class="md:w-1/2 md:mr-8">
                        <x-gallery></x-gallery>
                    </div>
                    <div class="mt-4 flex flex-col gap-4 md:mt-0 md:w-1/2 md:ml-8">

                        <h1 class="text-base">Набір Консоль Sony PlayStation 5 Pro 2TB White + Геймпад Бездротовий DualSense + Зарядний Пристрій Дротовий DualSense</h1>
                        <div class="flex justify-between">
                            <x-primitives.button theme="link">
                                Залишити відгук
                            </x-primitives.button>
                            <div class="text-global-black-60 text-sm">
                                Код: 460316339
                            </div>
                        </div>
                        <x-primitives.description-box>
                            <x-slot:slot1 name="seller">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-baseline">
                                        <div class="pr-1">Продавець:</div>
                                        <x-primitives.button theme="link">
                                            RM Store
                                        </x-primitives.button>
                                    </div>
                                    <x-primitives.button theme="text">
                                        Запитати про товар
                                    </x-primitives.button>
                                </div>
                            </x-slot:test>
                            <x-slot:slot2 name="price">
                                <div class="grid gap-2 items-center grid-cols-2 grid-rows-2 xl:grid-rows-1 xl:grid-cols-[max-content_max-content_max-content] xl:gap-4">
                                    <div class="col-span-1">
                                        <div>
                                            <div class="text-global-green text-sm">Є в наявності</div>
                                            <div class="text-3xl font-bold">
                                                45 916
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
                                                Купити
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
                            </x-slot:test2>
                        </x-primitives.description-box>

                        <x-primitives.description-box>
                            <x-slot:slot1 name="delivery">
                                <x-primitives.iconed-label>
                                    <x-slot:icon>
                                        @include('icons.map-marker')
                                    </x-slot:icon>
                                    <span class="gap-symbol">
                                        <span>Доставка в</span>
                                        <span class="font-bold">Київ</span>
                                    </span>
                                </x-primitives.iconed-label>
                            </x-slot:slot1>
                            <x-slot:slot2 name="payment">
                                <x-primitives.iconed-label>
                                    <x-slot:icon>
                                        @include('icons.wallet')
                                    </x-slot:icon>
                                    <span class="gap-symbol">
                                        <span class="font-bold">Оплата.</span>
                                        <span>Оплата під час отримання товару, Оплата карткою у відділенні, Apple Pay, Картою онлайн, -7% знижки при оплаті від 1500 грн карткою Visa «Універсальна»/преміальна від ПриватБанку, Google Pay.</span>
                                    </span>
                                </x-primitives.iconed-label>
                            </x-slot:slot2>
                            <x-slot:slot3 name="warranty">
                                <x-primitives.iconed-label>
                                    <x-slot:icon>
                                        @include('icons.warranty')
                                    </x-slot:icon>
                                    <span class="gap-symbol">
                                        <span class="font-bold">Гарантія.</span>
                                        <span>Повернення товару впродовж 30 днів</span>
                                    </span>
                                </x-primitives.iconed-label>
                            </x-slot:slot3>
                        </x-primitives.description-box>
                    </div>
                </div>
                <div class="mt-6">
                    <x-primitives.article>
                        <x-slot:title>
                            Опис
                        </x-slot:title>
                        <p>
                            PlayStation 5 Pro створена, щоб змінити те, що ви вважаєте можливим в іграх. Завдяки оновленому графічному і центральному процесорам ця консоль забезпечує блискавичне завантаження, приголомшливе зображення 4K і плавний ігровий процес, який не поступається будь-якій іншій. Незалежно від того, чи досліджуєте ви величезні відкриті світи чи боретеся на багатокористувацьких аренах високої інтенсивності, передове апаратне забезпечення PS5 Pro робить важливу кожну мить. У поєднанні з технологією трасування променів, динамічним 3D-аудіо та графікою надвисокої чіткості ви насолодитеся іграми, як ніколи раніше.
                        </p>
                        <p>
                            Ніколи не хвилюйтеся про те, що більше не вистачить місця. 2 ТБ внутрішньої пам’яті означає, що ви можете встановлювати більше ігор, зберігати більше даних і тримати свої улюблені ігри завжди готовими до гри. Немає потреби жертвувати старими іграми чи постійно видаляти файли – з цим масивним сховищем ви можете вільно досліджувати бібліотеку, настільки ж величезну, як ваша уява. Такий обсяг простору ідеально підходить для запеклих геймерів і колекціонерів, яким потрібен миттєвий доступ до величезної колекції найновіших і найкращих ігор.
                        </p>
                        <p>
                            Будьте готові відчути, як ігри оживають у ваших руках. Бездротовий контролер DualSense — це більше, ніж просто контролер — це розширення світу ігор. Завдяки інноваційному тактильному зворотному зв’язку, адаптивним тригерам і захоплюючому аудіо ви відчуєте кожен вибух, спринт і стрибок так, наче перебуваєте прямо в цьому місці. Його ергономічний дизайн забезпечує години комфортної гри, а його елегантний вигляд ідеально поєднується з PS5 Pro білого кольору, надаючи вашій установці бездоганний, стильний вигляд.
                        </p>
                        <p>
                            PlayStation 5 Pro — це не лише продуктивність, а й створення приголомшливого візуального досвіду. Завдяки справжнім іграм у форматі 4K і підтримці до 120 кадрів на секунду кожна деталь оживає з надзвичайною чіткістю. У поєднанні з технологією HDR графіка насичена, яскрава та неймовірно реалістична. Незалежно від того, чи досліджуєте ви фантастичні царства, мчаєте вулицями міста чи зіткнетеся в напружених битвах, ви побачите кожен колір, текстуру та рух, як ніколи раніше.
                        </p>
                    </x-primitives.article>
                </div>

            </x-slot:slot1>
            <x-slot:slot2 name="Характеристики">
                Характеристики
            </x-slot:slot2>
            <x-slot:slot3 name="Залишити відгук">
                Залишити відгук
            </x-slot:slot3>
            <x-slot:slot4 name="Питання">
                Питання
            </x-slot:slot4>
        </x-primitives.tab>
    </div>
@endsection
