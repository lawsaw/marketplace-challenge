<?php

namespace App\Livewire\Dashboard;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('ProductList list')]
class ProductList extends AdminComponent
{
    use WithPagination;

    public function delete(Product $product) {
        $product->delete();
    }

    public function editPublished(Product $product, $value)
    {
        $product->published = $value;
        $product->save();
    }

    public function render()
    {
        return view('livewire.dashboard.product-list', [
            'products' => Product::orderBy('id', 'desc')->paginate(3),
        ]);
    }
}
