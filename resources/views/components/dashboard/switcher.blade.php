<div>
    @isset($label)
        <x-dashboard.label target="{{ $attributes->get('wire:model') }}">{{ $label }}</x-dashboard.label>
    @endisset
    <label
        class="flex cursor-pointer select-none items-center"
    >
        <div class="relative">
            <input
                type="checkbox"
                {{ $attributes->merge([
                    'class' => 'sr-only peer',
                ]) }}
            />
            <div
                class="block h-8 w-14 rounded-full bg-meta-9 dark:bg-[#5A616B]"
            ></div>
            <div
                class="absolute left-1 top-1 h-6 w-6 rounded-full bg-white transition peer-checked:!right-1 peer-checked:!translate-x-full peer-checked:!bg-primary dark:peer-checked:!bg-white"
            ></div>
        </div>
    </label>
</div>
