<x-dashboard.page title="Products">
    <x-dashboard.table.wrapper title="Top Channels" class="min-w-[700px]">
        <x-dashboard.table.header-row>
            <x-dashboard.table.header-cell class="!flex-none !w-15">Id</x-dashboard.table.header-cell>
            <x-dashboard.table.header-cell class="!flex-auto !w-60">Title</x-dashboard.table.header-cell>
            <x-dashboard.table.header-cell>Price</x-dashboard.table.header-cell>
            <x-dashboard.table.header-cell>Updated</x-dashboard.table.header-cell>
            <x-dashboard.table.header-cell class="!flex-none !w-35 !justify-end">Actions</x-dashboard.table.header-cell>
        </x-dashboard.table.header-row>

        @foreach($products as $product)
            <x-dashboard.table.row>
                <x-dashboard.table.cell class="!flex-none !w-15">{{ $product->id }}</x-dashboard.table.cell>
                <x-dashboard.table.cell class="!flex-auto !w-60">{{ $product->title }}</x-dashboard.table.cell>
                <x-dashboard.table.cell>{{ $product->price }}</x-dashboard.table.cell>
                <x-dashboard.table.cell>{{ $product->updated_at }}</x-dashboard.table.cell>
                <x-dashboard.table.cell class="!flex-none !w-35" type="actions">
                    <x-dashboard.table.action-button
                        href="{{ route('product', $product->id) }}"
                        target="_blank"
                    >
                        @include('icons.dashboard.eye')
                    </x-dashboard.table.action-button>
                    <x-dashboard.table.action-button
                        wire:navigate
                        href="{{ route('dashboard-edit-product', $product->id) }}"
                    >
                        @include('icons.dashboard.edit')
                    </x-dashboard.table.action-button>
                    <x-dashboard.table.action-button
                        wire:click="delete({{$product}})"
                    >
                        @include('icons.dashboard.trash')
                    </x-dashboard.table.action-button>
                </x-dashboard.table.cell>
            </x-dashboard.table.row>
        @endforeach
    </x-dashboard.table.wrapper>
    {{ $products->links() }}
</x-dashboard.page>
