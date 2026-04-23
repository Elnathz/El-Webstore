<?php

namespace App\Livewire;

use Livewire\Component;

class ProductCatalog extends Component
{
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.product-catalog', compact('products'));
    }
}
