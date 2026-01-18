@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<h2 class="mb-4">Dashboard</h2>

<div class="row">
    <!-- Total Expense -->
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h6>Total Expense</h6>
                <h4>Rp {{ number_format($totalExpense, 0, ',', '.') }}</h4>
            </div>
        </div>
    </div>

    <!-- Cash Balance -->
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h6>Cash Balance</h6>
                <h4>Rp {{ number_format($cashBalance, 0, ',', '.') }}</h4>
            </div>
        </div>
    </div>

    <!-- Transactions -->
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h6>Transactions</h6>
                <h4>{{ $totalTransactions }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection
