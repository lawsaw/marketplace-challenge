{{--<div x-data="{ switcherToggle: @entangle($attributes->wire('model')) }">--}}
<div x-data="{ switcherToggle: @entangle($attributes->get('wire:model')) }">
    @isset($label)
        <x-dashboard.label target="{{ $attributes->get('wire:model') }}">{{ $label }}</x-dashboard.label>
    @endisset
    <label
        class="flex cursor-pointer select-none items-center"
    >
        <div class="relative">
            <input
                type="checkbox"
{{--                @change="switcherToggle = !switcherToggle"--}}
                x-model="switcherToggle"
                {{ $attributes->merge([
                    'class' => 'sr-only',
                ]) }}
            />
            <div
                class="block h-8 w-14 rounded-full bg-meta-9 dark:bg-[#5A616B]"
            ></div>
            <div
                :class="switcherToggle && '!right-1 !translate-x-full !bg-primary dark:!bg-white'"
                class="absolute left-1 top-1 h-6 w-6 rounded-full bg-white transition"
            ></div>
        </div>
    </label>

</div>
