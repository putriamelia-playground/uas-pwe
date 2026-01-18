<?php

namespace App\Http\Controllers;

use App\Models\CashBalance;
use App\Models\ExpenseCategory;
use App\Models\ExpenseTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataExTransaction = ExpenseTransaction::with('category')->get();

        return view('listExpense', compact('dataExTransaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataExCategory = ExpenseCategory::get();

        return view('formExpense', compact('dataExCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $latestBalance = CashBalance::latest()->value('nominal');
        $request->validate([
            'tanggal' => 'required',
            'nominal' => [
                'required',
                'numeric',
                'min:1',
                'lte:' . $latestBalance,
            ],
            [
                'nominal.lte' => 'Nominal melebihi saldo kas yang tersedia.',
            ]
        ]);

        ExpenseTransaction::create([
            'expense_category_id' => $request->expense_category_id,
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('expense_transaction.index')
            ->with('success', 'Catatan Transaksi Dibuat.');
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
