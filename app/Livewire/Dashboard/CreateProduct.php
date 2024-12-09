<?php

namespace App\Livewire\Dashboard;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('Create product')]
class CreateProduct extends AdminComponent
{
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $price;

    #[Validate('required')]
    public $description;

    public function save() {
        $this->validate();
        Product::create($this->all());
        $this->redirect(route('dashboard-product-list'), navigate: true);
    }

    public function render()
    {
        return view('livewire.dashboard.create-product');
    }
}
