<?php

namespace App\Livewire\Forms\Dashboard;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product;

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $price;

    #[Validate('required')]
    public $description;

    public $sold = false;
    public $published = true;

    public function store()
    {
        $this->validate();
//        Product::create($this->all());
        Product::create($this->only(['title', 'price', 'description', 'sold', 'published']));
    }

    public function setProduct(Product $product)
    {
        $this->title = $product->title;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->sold = $product->sold;
        $this->published = $product->published;

        $this->product = $product;
    }

    public function update()
    {
        $this->validate();
        $this->product->update(
            $this->only(['title', 'price', 'description', 'sold', 'published'])
        );
    }
}

