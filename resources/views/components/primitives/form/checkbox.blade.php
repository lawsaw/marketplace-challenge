@props([
    'label' => null,
])

<div>
    @isset($label)
        <label class="block text-sm/6 font-medium text-gray-900">
            {{ $label }}
        </label>
    @endisset
    <div class="flex items-center gap-4">
        <input
            {{ $attributes->merge([
                'type' => 'checkbox',
                'class' => 'w-6 h-6 cursor-pointer relative appearance-none shrink-0 w-4 h-4 border border-global-black-10 rounded-sm mt-1 bg-white focus:outline-none checked:bg-blue-500 checked:border-0',
            ]) }}
        />
    </div>
</div>
