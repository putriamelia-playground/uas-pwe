<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseTransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController; // Pastikan ini hanya dipanggil sekali
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Autentikasi
Route::get('login', [LoginController::class, 'view'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', LogoutController::class)->middleware('auth')->name('logout');

// Dashboard (Hanya satu route saja)
Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth');

// Master Data & Admin
Route::resource('expense-categories', ExpenseCategoryController::class)->names('expense_categories');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Transaksi
Route::resource('expense_transaction', ExpenseTransactionController::class);
Route::get('expense_transactions/pdf', [ExpenseTransactionController::class, 'exportPDF'])
    ->name('expense_transaction.pdf');
<<<<<<< HEAD
    
=======

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('expense_categories', ExpenseCategoryController::class);
>>>>>>> 96f4406de8b618ce44f18b9ea65d4d7993c4f474
