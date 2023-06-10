<?php

namespace App\Http\Controllers;

use App\Http\Requests\DebtStoreRequest;
use App\Http\Requests\DebtUpdateRequest;
use App\Models\Debt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DebtController extends Controller
{
    public function index(Request $request): View
    {
        $debts = Debt::all();

        return view('debt.index', compact('debts'));
    }

    public function create(Request $request): Response
    {
        return view('debt.create');
    }

    public function store(DebtStoreRequest $request): Response
    {
        $debt = Debt::create($request->validated());

        $request->session()->flash('debt.id', $debt->id);

        return redirect()->route('debt.index');
    }

    public function show(Request $request, Debt $debt): Response
    {
        return view('debt.show', compact('debt'));
    }

    public function edit(Request $request, Debt $debt): Response
    {
        return view('debt.edit', compact('debt'));
    }

    public function update(DebtUpdateRequest $request, Debt $debt): Response
    {
        $debt->update($request->validated());

        $request->session()->flash('debt.id', $debt->id);

        return redirect()->route('debt.index');
    }

    public function destroy(Request $request, Debt $debt): Response
    {
        $debt->delete();

        return redirect()->route('debt.index');
    }
}
