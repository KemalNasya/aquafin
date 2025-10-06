<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi - Pereng Mina GAP</title>
    <style>
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 12px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #2c5aa0;
            padding-bottom: 10px;
        }
        .title {
            font-size: 18px;
            font-weight: bold;
            color: #2c5aa0;
            margin-bottom: 5px;
        }
        .subtitle {
            font-size: 14px;
            color: #666;
        }
        .period {
            font-size: 12px;
            color: #888;
            margin-top: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th {
            background: #2c5aa0;
            color: white;
            padding: 8px;
            text-align: left;
            border: 1px solid #1e3d6f;
        }
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        .summary-table {
            width: 50%;
            margin: 20px auto;
        }
        .summary-table th {
            background: #28a745;
            text-align: right;
            width: 40%;
        }
        .net-balance {
            background: #d4edda !important;
            font-weight: bold;
            color: #155724;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 10px;
            color: #888;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .logo {
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    {{-- HEADER --}}
    <div class="header">
        <div class="logo">
            <strong>PERENG MINA GAP</strong>
        </div>
        <div class="title">LAPORAN TRANSAKSI KEUANGAN</div>
        <div class="subtitle">Budidaya Ikan</div>
        <div class="period">
            {{-- PERIODE --}}
            @php
                $currentStartDate = $startDate ?? now()->startOfMonth();
                $currentEndDate = $endDate ?? now()->endOfMonth();
            @endphp
            Periode: {{ $currentStartDate->format('d F Y') }} - {{ $currentEndDate->format('d F Y') }}
        </div>
    </div>

    {{-- TRANSACTION TABLE --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pengguna</th>
                <th>Jumlah</th>
                <th>Tipe</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->user->name ?? '-' }}</td>
                    <td style="text-align: right;">Rp {{ number_format($t->amount, 0, ',', '.') }}</td>
                    <td>
                        @if($t->type === 'income')
                            <span style="color: #28a745;">● Pemasukan</span>
                        @else
                            <span style="color: #dc3545;">● Pengeluaran</span>
                        @endif
                    </td>
                    <td>{{ $t->description ?? '-' }}</td>
                    <td>{{ $t->transaction_date->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- SUMMARY SECTION --}}
    <table class="summary-table">
        <tr>
            <th>Total Pemasukan:</th>
            <td style="text-align: right; color: #28a745; font-weight: bold;">
                Rp {{ number_format($totalIncome, 0, ',', '.') }}
            </td>
        </tr>
        <tr>
            <th>Total Pengeluaran:</th>
            <td style="text-align: right; color: #dc3545; font-weight: bold;">
                Rp {{ number_format($totalExpense, 0, ',', '.') }}
            </td>
        </tr>
        <tr class="net-balance">
            <th>SALDO BERSIH:</th>
            <td style="text-align: right; font-size: 14px;">
                Rp {{ number_format($netBalance, 0, ',', '.') }}
            </td>
        </tr>
    </table>

    {{-- FOOTER --}}
    <div class="footer">
        {{-- ✅ FIX: GUNAKAN CARBON LANGSUNG DENGAN TIMEZONE INDONESIA --}}
        Dicetak pada: {{ \Carbon\Carbon::now('Asia/Jakarta')->locale('id')->translatedFormat('d F Y H:i:s') }}<br>
        Pereng Mina GAP - Sistem Manajemen Keuangan Budidaya Ikan
    </div>
</body>
</html>