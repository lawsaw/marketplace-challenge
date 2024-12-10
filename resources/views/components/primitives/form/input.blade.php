@props([
    'label' => null,
])

<div>
    @isset($label)
        <label class="block text-sm/6 font-medium text-gray-900">
            {{ $label }}
        </label>
    @endisset
    <div class="mt-2">
        <input
            {{ $attributes->merge([
                'type' => 'text',
                'class' => 'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6',
//                'class' => 'w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary'
            ]) }}
        />
    </div>
    @error($attributes->get('wire:model'))
        <x-primitives.form.validation-error class="mt-1">{{ $message  }}</x-primitives.form.validation-error>
    @enderror
</div>
