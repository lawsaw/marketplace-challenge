<x-layouts.app>
    <div class="mt-4">
        @foreach($products as $product)
            <a href="/products/{{ $product->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-500-blue text-sm">{{ $product->title }}</div>
                <div>
                    <strong class="text-laracasts">{{ $product->price }}</strong>
                </div>
            </a>
        @endforeach
    </div>
    <div>{{ $products->links() }}</div>
</x-layouts.app>
