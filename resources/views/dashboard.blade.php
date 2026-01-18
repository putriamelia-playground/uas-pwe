@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<h2 class="mb-4">Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h6>Total Expense</h6>
                <h4>Rp 5.000.000</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h6>Cash Balance</h6>
                <h4>Rp 10.000.000</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h6>Transactions</h6>
                <h4>25</h4>
            </div>
        </div>
    </div>
</div>
@endsection
