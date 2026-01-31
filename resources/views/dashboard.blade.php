@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4 mb-4 fw-bold text-dark">Ringkasan Keuangan</h2>

    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-danger text-white mb-4 shadow border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-white-50 small text-uppercase fw-bold">Total Pengeluaran</div>
                            <h3 class="fw-bold mt-1">Rp {{ number_format($totalExpense, 0, ',', '.') }}</h3>
                        </div>
                        <i class="fas fa-shopping-cart fa-2x text-white-50"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small bg-dark bg-opacity-10">
                    <a class="text-white stretched-link" href="{{ route('expense_transaction.index') }}">Lihat Detail</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4 shadow border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-white-50 small text-uppercase fw-bold">Sisa Saldo Kas</div>
                            <h3 class="fw-bold mt-1">Rp {{ number_format($cashBalance, 0, ',', '.') }}</h3>
                        </div>
                        <i class="fas fa-wallet fa-2x text-white-50"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small bg-dark bg-opacity-10">
                    <span class="text-white">Status Aman</span>
                    <div class="text-white"><i class="fas fa-check-circle"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4 shadow border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-white-50 small text-uppercase fw-bold">Jumlah Transaksi</div>
                            <h3 class="fw-bold mt-1">{{ $totalTransactions }} Transaksi</h3>
                        </div>
                        <i class="fas fa-exchange-alt fa-2x text-white-50"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small bg-dark bg-opacity-10">
                    <span class="text-white">Terakhir diperbarui hari ini</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection