<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\Dashboard\ProductForm;
use Livewire\Attributes\Title;

#[Title('Create product')]
class CreateProduct extends AdminComponent
{
    public ProductForm $form;

    public function save() {
        $this->form->store();
        $this->redirect(route('dashboard-product-list'), navigate: true);
    }

    public function render()
    {
        return view('livewire.dashboard.create-product');
    }
}
