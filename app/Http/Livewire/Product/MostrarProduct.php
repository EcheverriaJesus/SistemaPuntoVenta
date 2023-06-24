<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
/* Importar Modelo a utilizar */
use App\Models\Product;
/* Importar paginacion */
use Livewire\WithPagination;

class MostrarProduct extends Component
{
    /* Usar componente paginacion */
    use WithPagination;

    public $confirmingDeletion = false;/* Nombre del modal de eliminacion */
    public $editProduct = false;       /* Nombre del modal de actualizacion */
    public $editProductData = [];      /* Aray para guardar los datos a actualizar */
    public $productIdToUpdate;        /* Variable para guardar el id del producto a actualizar */
    public $productIdToDelete;        /* Variable para guardar el id del producto a actualizar */
    public $searchProduct = '';       /* Variable para guardar lo que busca el usuario */

    public function render()
    {
        /* Consulta para la busqueda */
        $products = Product::where(function ($query) {
        $query->where('name', 'like', '%' . $this->searchProduct . '%')->orWhere('codigo', 'like', '%' . $this->searchProduct . '%');
        })->paginate(5); /* Cantidad de registros por pagina */

        return view('livewire.product.mostrar-product', [
            'products' => $products,
        ])->layout('layouts.app');
    }

    /* Actualizando tabla con los resultados de la busqueda */
    public function updatingSearchProduct()
    {
    $this->resetPage();
    }

    /* Metodo que se manda a llamar en el boton de eliminar */
    public function confirmDeleteProduct($productId)
    {
        $this->productIdToDelete = $productId;
        $this->confirmingDeletion = true;
    }

    /* Metodo que se manda a llamar en el boton de actualizar */
    public function updateproduct($productId)
{
    $this->productIdToUpdate = $productId;
    $product = Product::findOrFail($productId);
    $this->editProductData = [
        'name' => $product->name,
        'description' => $product->description,
        'price' => $product->price,
        'stock' => $product->stock,
    ];
    $this->editProduct = true;
}

    /* Metodo que se manda a llmar en el boton eliminar dentro del modal */
    public function deleteProduct()
    {
        $product = Product::findOrFail($this->productIdToDelete);
        $product->delete();
        $this->confirmingDeletion = false;
    }
 
    /* Metodo que se manda a llmar en el boton guardar dentro del modal */
    public function saveProduct()
{
    //Obtner el producto que se editará
    $product = Product::findOrFail($this->productIdToUpdate);

    // Actualiza los campos del producto con los valores editados
    $product->name = $this->editProductData['name'];
    $product->description = $this->editProductData['description'];
    $product->price = $this->editProductData['price'];
    $product->stock = $this->editProductData['stock'];
    $product->save();

    $this->editProduct = false;
    $this->editProductData = [];
    $this->emit('productUpdated', $product->id);
}

}
