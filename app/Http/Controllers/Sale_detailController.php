<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sale_detailStoreRequest;
use App\Http\Requests\Sale_detailUpdateRequest;
use App\SaleDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Sale_detailController extends Controller
{
    public function index(Request $request): View
    {
        $saleDetails = SaleDetail::all();

        return view('saleDetail.index', compact('saleDetails'));
    }

    public function create(Request $request): Response
    {
        return view('saleDetail.create');
    }

    public function store(Sale_detailStoreRequest $request): Response
    {
        $saleDetail = SaleDetail::create($request->validated());

        $request->session()->flash('saleDetail.id', $saleDetail->id);

        return redirect()->route('saleDetail.index');
    }

    public function show(Request $request, Sale_detail $saleDetail): Response
    {
        return view('saleDetail.show', compact('saleDetail'));
    }

    public function edit(Request $request, Sale_detail $saleDetail): Response
    {
        return view('saleDetail.edit', compact('saleDetail'));
    }

    public function update(Sale_detailUpdateRequest $request, Sale_detail $saleDetail): Response
    {
        $saleDetail->update($request->validated());

        $request->session()->flash('saleDetail.id', $saleDetail->id);

        return redirect()->route('saleDetail.index');
    }

    public function destroy(Request $request, Sale_detail $saleDetail): Response
    {
        $saleDetail->delete();

        return redirect()->route('saleDetail.index');
    }
}
