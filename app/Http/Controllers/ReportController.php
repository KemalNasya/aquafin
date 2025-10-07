<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransactionsExport;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function exportPdf(Request $request)
    {
        $bulan = $request->input('bulan', now()->month);
        $tahun = $request->input('tahun', now()->year);

        // ganti sesuai nama kolom tanggal di tabel kamu
        $transactions = Transaction::whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->get();

        $totalIncome = $transactions->where('type', 'income')->sum('amount');
        $totalExpense = $transactions->where('type', 'expense')->sum('amount');
        $netBalance = $totalIncome - $totalExpense;

        $pdf = Pdf::loadView('exports.transactions', [
            'transactions' => $transactions,
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'netBalance' => $netBalance,
            'bulan' => $bulan,
            'tahun' => $tahun,
        ])->setPaper('a4', 'portrait');

        return $pdf->download("transactions_{$bulan}_{$tahun}.pdf");
    }
}
