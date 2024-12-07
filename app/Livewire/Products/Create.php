<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create page')]
class Create extends Component
{
    public function render()
    {
        return view('livewire.products.create');
    }
}
