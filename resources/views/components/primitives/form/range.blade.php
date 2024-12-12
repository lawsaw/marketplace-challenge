@props([
    'label' => null,
    'minModel' => null,
    'maxModel' => null,
    'minAvailableValue' => null,
    'maxAvailableValue' => null,
])

<div>
    @isset($label)
        <label class="block text-sm/6 font-medium text-gray-900">
            {{ $label }}
        </label>
    @endisset
    <div class="flex items-center gap-4">
        <input wire:model="{{ $minModel }}" type="number" min="{{ $minAvailableValue }}" class="border border-global-black-10 rounded h-8 w-16 px-2" />
        <div>-</div>
        <input wire:model="{{ $maxModel }}" type="number" max="{{ $maxAvailableValue }}" class="border border-global-black-10 rounded h-8 w-16 px-2" />
    </div>
</div>
