@props([
    'target' => null,
])

<label class="mb-2.5 block font-medium text-black dark:text-white">
    {{ $slot }}
    <span wire:dirty wire:target="{{ $target }}">*</span>
</label>
