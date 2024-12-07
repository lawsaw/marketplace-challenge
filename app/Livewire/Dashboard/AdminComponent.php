<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
class AdminComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.home');
    }
}
