<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
//    #[Validate('required')]
    public $request = '';
    public $results = [];
    public $loading = false;

    protected $rules = [
        'request' => 'required',
    ];

    public function clearRequest()
    {
        $this->reset('request', 'results', 'loading');
    }

    public function updatedRequest($request)
    {
        $this->reset('results', 'loading');
        $this->validate();
        $this->loading = true;
        sleep(1); // just to let "loading" to display for a while
        $searchTerm = "%{$request}%";
        $this->results = Product::where('title', 'LIKE', $searchTerm)->get();
        $this->loading = false;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
