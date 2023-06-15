<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class MostrarProduct extends Component
{
    public $confirmingUserDeletion;
    use WithPagination;
    public $searchProduct = '';

    public function render()
    {
        $products = Product::where(function ($query) {
        $query->where('name', 'like', '%' . $this->searchProduct . '%')->orWhere('codigo', 'like', '%' . $this->searchProduct . '%');
        })->paginate(5);
        return view('livewire.product.mostrar-product', [
            'products' => $products,
        ]);
    }
    public function updatingSearchProduct()
    {
    $this->resetPage();
    }
}
