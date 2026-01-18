<?php

namespace App\Http\Controllers;

use App\Models\ExpenseTransaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalExpense = ExpenseTransaction::sum('nominal');
        $cashBalance = ExpenseTransaction::latest()->value('nominal_setelah') ?? 0;
        $totalTransactions = ExpenseTransaction::count();

        return view('dashboard', compact('totalExpense', 'cashBalance', 'totalTransactions'));
    }
}
