<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Http\Controllers\ProductController;
use App\Http\Requests\ProductStoreRequest;

class AddProduct extends Component
{
    public $codigo;
    public $name;
    public $description;
    public $price;
    public $stock;

    public function render()
    {
        return view('livewire.product.add-product');
    }

    public function saveProduct(ProductStoreRequest $request, ProductController $productController)
    {
        $productData = [
            'codigo' => $this->codigo,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
        ];

        $request->merge($productData);

        $productController->store($request);

        // Agregar cualquier lógica adicional que necesites después de guardar el producto

        // Redireccionar o emitir eventos según tus necesidades

        // Por ejemplo, puedes redireccionar a la lista de productos:
        return redirect()->route('product.index');
    }
}