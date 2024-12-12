<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    private $results;

    #[Url]
    public $sold = false;

    #[Url]
    public $minPrice = 0;

    #[Url]
    public $maxPrice = 0;

    public $minAvailablePrice;

    public $maxAvailablePrice;

    public function updated($property)
    {
        if (in_array($property, ['minPrice', 'maxPrice', 'sold'])) {
            $this->resetPage();
        }
    }

    public function applyFilters()
    {
        $query = Product::query();
        $query->whereBetween('price', [$this->minPrice, $this->maxPrice]);
        if (!is_null($this->sold)) {
            $query->where('sold', $this->sold);
        }
        return $query->orderBy('id', 'desc');
    }

    public function mount()
    {
        $this->minAvailablePrice = Product::min('price') ?? 0;
        $this->maxAvailablePrice = Product::max('price') ?? 0;
        if ($this->minPrice === 0) {
            $this->minPrice = $this->minAvailablePrice;
        }

        if ($this->maxPrice === 0) {
            $this->maxPrice = $this->maxAvailablePrice;
        }
    }

    public function render()
    {
        $results = $this->applyFilters()->paginate(7);

        if ($results->isEmpty()) {
            $this->resetPage();
            $results = $this->applyFilters()->paginate(7);
        }

        return view('livewire.search', [
            'products' => $results,
        ]);
    }
}
