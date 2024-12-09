<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;

#[Title('Create product')]
class ProductCreate extends AdminComponent
{
    public function render()
    {
        return view('livewire.dashboard.product-create');
    }
}
