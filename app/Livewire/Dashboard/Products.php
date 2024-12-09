<?php

namespace App\Livewire\Dashboard;

use App\Models\Product;
use Livewire\Attributes\Title;

#[Title('Products list')]
class Products extends AdminComponent
{
    public $products;

    public function mount() {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.dashboard.products');
    }
}
