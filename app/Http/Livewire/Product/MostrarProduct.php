<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class MostrarProduct extends Component
{

    public $confirmingUserDeletion = false;
    use WithPagination;
    public $productIdToDelete;
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

    public function confirmDeleteProduct($productId)
    {
        $this->productIdToDelete = $productId;
        $this->confirmingUserDeletion = true;
    }
    public function deleteProduct()
    {
        $product = Product::findOrFail($this->productIdToDelete);
        $product->delete();
        $this->confirmingUserDeletion = false;
    }
}
