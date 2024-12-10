@props([
    'label' => null,
    'icon' => null,
    'type' => 'text',
])

<div>
    @isset($label)
        <x-dashboard.label target="{{ $attributes->get('wire:model') }}">{{ $label }}</x-dashboard.label>
    @endisset
    <div class="relative">
        @if($type === 'textarea')
            <textarea
                rows="6"
                {{ $attributes->merge([
                    'class' => 'w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary',
                ]) }}
            ></textarea>
        @else
            <input
                {{ $attributes->merge([
                    'type' => $type,
                    'class' => 'w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary',
                ]) }}
            />
        @endif
        @isset($icon)
            <span class="absolute right-4 top-4">
                @include($icon)
            </span>
        @endisset
    </div>
    @error($attributes->get('wire:model'))
        <x-dashboard.error>{{ $message  }}</x-dashboard.error>
    @enderror
</div>
