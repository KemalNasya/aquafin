<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Transaksi</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #333;
        }
        .header-table {
            width: 100%;
            border: none;
            margin-bottom: 10px;
        }
        .header-table td {
            border: none;
            vertical-align: top;
        }
        .logo {
            height: 50px;
        }
        h2 {
            text-align: center;
            margin: 5px 0;
        }
        .subtitle {
            text-align: center;
            margin-bottom: 10px;
            font-size: 11px;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
            font-size: 11px;
        }
        th {
            background: #f2f2f2;
            text-align: center;
        }
        td {
            vertical-align: top;
        }
        .summary {
            width: 40%;
            margin-top: 15px;
            float: right;
            border-collapse: collapse;
        }
        .summary th, .summary td {
            border: 1px solid #000;
            padding: 6px;
            font-size: 11px;
        }
        .summary th {
            background: #f9f9f9;
            text-align: left;
        }
        .net {
            font-weight: bold;
            background: #eaf2f8;
        }
    </style>
</head>
<body>

    <!-- Header dengan logo & tanggal -->
    <table class="header-table">
        <tr>
            <td style="width: 70%;">
                <img src="{{ public_path('images/logo.png') }}" class="logo" alt="Logo"><br>
                <strong>Pereng Mina Aquafin</strong><br>
                <small>Laporan Keuangan</small>
            </td>
            <td style="width: 30%; text-align: right;">
                Dicetak: {{ \Carbon\Carbon::now()->format('d-m-Y H:i') }}
            </td>
        </tr>
    </table>

    <h2>Laporan Transaksi Bulanan</h2>
    <p class="subtitle">Bulan {{ $bulan }} Tahun {{ $tahun }}</p>

    <!-- Tabel Transaksi -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Description</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td style="text-align: center;">{{ $transaction->id }}</td>
                    <td>{{ $transaction->user->name ?? '-' }}</td>
                    <td style="text-align: right;">{{ number_format($transaction->amount, 0, ',', '.') }}</td>
                    <td style="text-align: center;">{{ ucfirst($transaction->type) }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td style="text-align: center;">
                        {{ \Carbon\Carbon::parse($transaction->created_at)->format('d-m-Y') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Ringkasan -->
    <table class="summary">
        <tr>
            <th>Total Income</th>
            <td style="text-align: right;">{{ number_format($totalIncome, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Total Expense</th>
            <td style="text-align: right;">{{ number_format($totalExpense, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Net Balance</th>
            <td class="net" style="text-align: right;">
                {{ number_format($netBalance, 0, ',', '.') }}
            </td>
        </tr>
    </table>

</body>
</html>

