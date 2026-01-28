@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Expense Category</h4>
        <a href="{{ route('expense_categories.create') }}" class="btn btn-primary">
            + Add Category
        </a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Jenis Kategori</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataExCategory as $expenseCategory)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $expenseCategory->nama_jenis }}</td>

                        <td>
                            <a href="{{ route('expense_transaction.edit', $expenseCategory->id) }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('expense_transaction.destroy', $expenseCategory->id) }}" method="POST" class="d-inline">
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
                            Tidak ada data Jenis Kategori Transaksi.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
