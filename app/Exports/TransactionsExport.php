<?php

namespace App\Exports;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TransactionsExport implements FromView
{
    protected $startDate;
    protected $endDate;
    protected $printedAt;

    public function __construct($startDate = null, $endDate = null)
    {
        $this->startDate = $startDate ? Carbon::parse($startDate) : Carbon::now()->startOfMonth();
        $this->endDate = $endDate ? Carbon::parse($endDate) : Carbon::now()->endOfMonth();
        $this->printedAt = Carbon::now(); // ✅ Waktu ketika export diproses
    }

    public function view(): View
    {
        $transactions = Transaction::whereBetween('transaction_date', [
                $this->startDate, 
                $this->endDate
            ])
            ->with('user')
            ->orderBy('transaction_date', 'desc')
            ->get();

        $totalIncome = $transactions->where('type', 'income')->sum('amount');
        $totalExpense = $transactions->where('type', 'expense')->sum('amount');
        $netBalance = $totalIncome - $totalExpense;

        return view('exports.transactions', [
            'transactions' => $transactions,
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'netBalance' => $netBalance,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'printedAt' => $this->printedAt, 
        ]);
    }
}