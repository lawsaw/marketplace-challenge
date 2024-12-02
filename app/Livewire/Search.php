<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{

    public $request = '';
    public $history = [];

    public function submit(string $request = null)
    {
        $this->request = $request ?? $this->request;
        $this->history = array_filter($this->history, fn($item) => $item !== $this->request);
        array_unshift($this->history, $this->request);
    }
    public function clear()
    {
        $this->request = '';
    }

    public function clearHistory()
    {
        $this->history = [];
    }

    public function render()
    {
        return view('livewire.search');
    }
}
