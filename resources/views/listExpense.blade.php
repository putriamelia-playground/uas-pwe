@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Expense Transactions</h4>
        <a href="{{ route('expense_transaction.create') }}" class="btn btn-primary">
            + Add Expense
        </a>
    </div>

    @error('nominal')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nominal</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        {{-- <th class="text-end">Amount</th>
                        <th>User</th> --}}
                        <th width="120">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataExTransaction as $expense)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ \Carbon\Carbon::parse($expense->tanggal)->format('d-m-Y') }}
                        </td>
                        <td class="text-end">
                            Rp {{ number_format($expense->nominal, 0, ',', '.') }}
                        </td>
                        <td>{{ $expense->category->nama_jenis }}

                        </td>
                        <td>{{ $expense->keterangan }}</td>

                        <td>
                            <a href="{{ route('expense_transaction.edit', $expense->id) }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('expense_transaction.destroy', $expense->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this transaction?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            No expense transactions found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
