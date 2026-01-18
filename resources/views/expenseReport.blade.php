<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Transaksi Pengeluaran</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-right {
            text-align: right;
        }

    </style>
</head>
<body>
    <h3 style="text-align:center;">Laporan Transaksi Pengeluaran</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Nominal</th>
                <th>Keterangan</th>
                <th>User</th>
                <th>Saldo Setelah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataExTransaction as $index => $expense)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $expense->tanggal->format('d-m-Y') }}</td>
                <td>{{ $expense->category?->nama_jenis ?? '-' }}</td>
                <td class="text-right">Rp {{ number_format($expense->nominal, 0, ',', '.') }}</td>
                <td>{{ $expense->keterangan ?? '-' }}</td>
                <td>{{ $expense->user?->name ?? '-' }}</td>
                <td class="text-right">Rp {{ number_format($expense->nominal_setelah ?? 0, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
