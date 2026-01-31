<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // 1. Pastikan Model User di-import
use App\Models\ExpenseTransaction; // Sesuaikan dengan nama model Anda
// Import model lain yang Anda gunakan (CashBalance, dll)

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Data yang sudah Anda buat sebelumnya
        $totalExpense = ExpenseTransaction::sum('nominal'); 
        // Logika untuk saldo (sesuaikan dengan query Anda)
        $cashBalance = ExpenseTransaction::orderBy('created_at', 'desc')->first()->nominal_setelah ?? 0;
        $totalTransactions = ExpenseTransaction::count();

        // 2. AMBIL DATA USERS DARI DATABASE
        $users = User::all(); 

        // 3. KIRIM VARIABEL $users KE VIEW
        return view('dashboard', compact(
            'totalExpense', 
            'cashBalance', 
            'totalTransactions', 
            'users' // Pastikan ini ada!
        ));
    }
}