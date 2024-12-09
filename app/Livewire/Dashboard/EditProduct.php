<?php

namespace App\Livewire\Dashboard;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('Edit product')]
class EditProduct extends AdminComponent
{
    public ?Product $product;

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $price;

    #[Validate('required')]
    public $description;

    public function mount(Product $product) {
        $this->title = $product->title;
        $this->price = $product->price;
        $this->description = $product->description;

        $this->product = $product;
    }

    public function save() {
        $this->validate();
        $this->product->update(
            $this->only(['title', 'price', 'description'])
        );
        $this->redirect(route('dashboard-product-list'), navigate: true);
    }
    public function render()
    {
        return view('livewire.dashboard.edit-product');
    }
}
