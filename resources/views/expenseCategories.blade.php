@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-4">
    <h2 class="mt-4 mb-4 fw-bold">Master Kategori Pengeluaran</h2>

    @if(isset($expenseCategory))
    <div class="card shadow border-0 mb-4">
        <div class="card-body">
            <h5>{{ $expenseCategory->exists ? 'Edit Kategori' : 'Tambah Kategori Baru' }}</h5>
            <form action="{{ $expenseCategory->exists ? route('expense_categories.update', $expenseCategory->id) : route('expense_categories.store') }}" method="POST">
                @csrf
                @if($expenseCategory->exists) @method('PUT') @endif
                
                <div class="input-group">
                    <input type="text" name="nama_jenis" class="form-control" value="{{ old('nama_jenis', $expenseCategory->name) }}" placeholder="Nama Kategori" required>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('expense_categories.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
    @endif

    <div class="card shadow border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
            @if(!isset($expenseCategory))
                <a href="{{ route('expense_categories.create') }}" class="btn btn-primary btn-sm">+ Tambah</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->nama_jenis }}</td>
                        <td class="text-center">
                            <a href="{{ route('expense_categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('expense_categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection