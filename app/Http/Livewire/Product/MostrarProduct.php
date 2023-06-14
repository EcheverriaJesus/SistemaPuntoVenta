<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class MostrarProduct extends Component
{
    
    protected $products;
    use WithPagination;

    public function render()
    {

        $this->products = Product::paginate(5);
        return view('livewire.product.mostrar-product', [
            'products' => $this->products,
        ]);
        
    }
}
