@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">

    <div class="mb-3">
        <h4>Add Expense Transaction</h4>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('expense_transaction.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Expense Category</label>
                    <select name="expense_category_id" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        @foreach ($dataExCategory as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->nama_jenis }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nominal</label>
                    <input type="number" name="nominal" class="form-control" placeholder="Enter amount" min="0" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Notes (optional)</label>
                    <textarea name="keterangan" class="form-control" rows="3" placeholder="Additional notes..."></textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('expense_transaction.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Save Expense
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
