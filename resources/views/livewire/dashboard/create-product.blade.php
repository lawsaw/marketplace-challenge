<x-dashboard.page title="Create product" size="compact">
    <x-dashboard.board>
        <form wire:submit="save">
            <div class="mb-4">
                <x-dashboard.input wire:model="title" placeholder="Enter product's title" label="Title"></x-dashboard.input>
            </div>
            <div class="mb-6">
                <x-dashboard.input wire:model="price" type="number" placeholder="Enter product's price" label="Price"></x-dashboard.input>
            </div>
            <div class="mb-6">
                <x-dashboard.input wire:model="description" type="textarea" placeholder="Enter product's description" label="Description"></x-dashboard.input>
            </div>
            <div class="mb-5">
                <x-dashboard.button>Create Product</x-dashboard.button>
            </div>
        </form>
    </x-dashboard.board>
</x-dashboard.page>
