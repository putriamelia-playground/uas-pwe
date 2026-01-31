@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">

    <div class="mb-3">
        <h4>Add Expense Category</h4>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('expense_categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Jenis Kategori</label>
                    <input name="nama_jenis" class="form-control" placeholder="Masukkan Jenis Kategori"></textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('expense_categories.index') }}" class="btn btn-secondary">
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
