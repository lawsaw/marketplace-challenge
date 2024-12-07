@props([
    'label' => null,
    'icon' => null,
])

<div>
    @isset($label)
        <label class="mb-2.5 block font-medium text-black dark:text-white">
            {{ $label }}
        </label>
    @endisset
    <div class="relative">
        <input
            type="text"
            {{ $attributes->merge(['class' => 'w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary']) }}
        />
        @isset($icon)
            <span class="absolute right-4 top-4">
                @include($icon)
            </span>
        @endisset
    </div>
    @error($attributes->get('wire:model'))
        <p class="text-sm text-red-500 font-semibold">{{ $message  }}</p>
    @enderror
</div>
