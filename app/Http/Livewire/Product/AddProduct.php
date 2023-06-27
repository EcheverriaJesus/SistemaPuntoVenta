<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class AddProduct extends Component
{
    public $ExistProduct = false;

    public function render()
    {
        $this->ExistProduct = true;
        return view('livewire.product.add-product');
    }
}
