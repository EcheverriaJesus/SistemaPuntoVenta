<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Event;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $searchProduct = $request->input('searchProduct');

        $products = Product::where('name', 'like', '%' . $searchProduct . '%')->paginate(5);

        return view('product.index')->with('products', $products);
    }

    public function create(Request $request): View
    {
        return view('product.create');
    }

    public function store(ProductStoreRequest $request): RedirectResponse
    {
         // Verificar si el producto ya está registrado
    $existingProduct = Product::where('codigo', $request->codigo)->first();

    if ($existingProduct) {
        return redirect()->back()->with('notification', 'El producto ya está registrado.');
    } else {
        $product = Product::create($request->validated());
    }

    return redirect()->route('product.index');
    }

    public function show(Request $request, Product $product): Response
    {
        return view('product.show', compact('product'));
    }

    public function edit(Request $request, Product $product): Response
    {
        return view('product.edit', compact('product'));
    }

    public function update(ProductUpdateRequest $request, Product $product): Response
    {
        $product->update($request->validated());

        $request->session()->flash('product.id', $product->id);

        return redirect()->route('product.index');
    }

    public function destroy(Request $request, Product $product): Response
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
