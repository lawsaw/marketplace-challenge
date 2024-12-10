<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\Dashboard\ProductForm;
use App\Models\Product;
use Livewire\Attributes\Title;

#[Title('Edit product')]
class EditProduct extends AdminComponent
{

    public ProductForm $form;

    public function mount(Product $product) {
        $this->form->setProduct($product);
    }

    public function save() {
        $this->form->update();
        $this->redirect(route('dashboard-product-list'), navigate: true);
    }

    public function render()
    {
        return view('livewire.dashboard.edit-product');
    }
}
