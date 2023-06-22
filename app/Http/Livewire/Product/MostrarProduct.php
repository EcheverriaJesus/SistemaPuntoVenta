<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Event;

class MostrarProduct extends Component
{

    public $confirmingDeletion = false;
    public $addproduct = false;
    use WithPagination;
    public $productIdToDelete;
    public $searchProduct = '';
    protected $listeners = ['productCreated'];

    public function render()
    {
        $products = Product::where(function ($query) {
        $query->where('name', 'like', '%' . $this->searchProduct . '%')->orWhere('codigo', 'like', '%' . $this->searchProduct . '%');
        })->paginate(5);
        return view('livewire.product.mostrar-product', [
            'products' => $products,
        ])->layout('layouts.app');//asignada entr);
    }
    public function updatingSearchProduct()
    {
    $this->resetPage();
    }

    public function confirmDeleteProduct($productId)
    {
        $this->productIdToDelete = $productId;
        $this->confirmingDeletion = true;
    }
    public function deleteProduct()
    {
        $product = Product::findOrFail($this->productIdToDelete);
        $product->delete();
        $this->confirmingDeletion = false;
    }
    public function productCreated($product){//metodo asignado

    }
}
