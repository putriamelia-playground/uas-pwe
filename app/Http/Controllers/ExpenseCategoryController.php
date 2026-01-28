<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataExCategory = ExpenseCategory::get();

        return view('listExpenseCategory', compact('dataExCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formExpenseCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required',
        ]);

        ExpenseCategory::create([
            'nama_jenis' => $request->nama_jenis,
        ]);

        return redirect()
            ->route('expense_categories.index')
            ->with('success', 'Jenis Kategori Baru Berhasil Dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
