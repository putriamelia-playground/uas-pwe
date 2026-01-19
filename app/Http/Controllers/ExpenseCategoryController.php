<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
  public function index()
{
    $categories = ExpenseCategory::all();
    // Panggil nama file tanpa .blade.php
    return view('expenseCategories', compact('categories'));
}

public function create()
{
    $categories = ExpenseCategory::all();
    $expenseCategory = new ExpenseCategory(); // Objek kosong untuk form tambah
    return view('expenseCategories', compact('categories', 'expenseCategory'));
}

public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required|unique:expense_categories,nama_jenis'
        ]);

        ExpenseCategory::create([
            'nama_jenis' => $request->nama_jenis
        ]);

        return redirect()->route('expense_categories.index')->with('success', 'Kategori berhasil disimpan!');
    }

public function edit(ExpenseCategory $expenseCategory)
{
    $categories = ExpenseCategory::all();
    return view('expenseCategories', compact('categories', 'expenseCategory'));
}

public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $request->validate([
            'nama_jenis' => 'required|unique:expense_categories,nama_jenis,' . $expenseCategory->id
        ]);

        $expenseCategory->update([
            'nama_jenis' => $request->nama_jenis
        ]);

        return redirect()->route('expense_categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();
        return redirect()->route('expense_categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
