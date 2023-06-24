<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class AddProduct extends Component
{

    public $ExistProduct = false;

    public function render()
    {
        return view('livewire.product.add-product');
    }
    public function Existencia()
    {
        $this->ExistProduct = true;
    }
}
