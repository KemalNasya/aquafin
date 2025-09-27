<?php

namespace App\Filament\Widgets;

use App\Models\Gallery;
use App\Models\Post;
use App\Models\Transaction;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StatsFinance extends BaseWidget
{
    protected function getStats(): array
    {
        $user = Auth::user();

        $stats = [];

        // Stats khusus finance untuk admin
        if ($user && in_array($user->role, ['admin', 'owner'])) {
            $income = Transaction::where('type', 'income')->sum('amount');
            $expense = Transaction::where('type', 'expense')->sum('amount');

            $stats[] = Stat::make('Total Income', 'Rp' . number_format($income, 2))
                ->description('All income transactions')
                ->icon('heroicon-o-arrow-up-circle');

            $stats[] = Stat::make('Total Expense', 'Rp' . number_format($expense, 2))
                ->description('All expense transactions')
                ->icon('heroicon-o-arrow-down-circle');

            $stats[] = Stat::make('Net Balance', 'Rp' . number_format($income - $expense, 2))
                ->description('Current balance')
                ->color($income - $expense >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-currency-dollar');
        }

        return $stats;
    }
}
