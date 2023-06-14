<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class SearchProduct extends Component

{
    public $searchProduct;
   

    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->searchProduct . '%')->get();
       
        return view('livewire.search-product', compact('products'));
    }
   
}