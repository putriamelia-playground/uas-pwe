<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseTransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'view'])->name('login.form');

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');

Route::resource('expense_transaction', ExpenseTransactionController::class);

Route::get('expense_transactions/pdf', [ExpenseTransactionController::class, 'exportPDF'])
    ->name('expense_transaction.pdf');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('expense_categories', ExpenseCategoryController::class);
