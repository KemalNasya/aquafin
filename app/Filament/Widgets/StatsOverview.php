<?php

namespace App\Filament\Widgets;

use App\Models\Gallery;
use App\Models\Post;
use App\Models\Transaction;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $user = Auth::user();

        $stats = [];

        // Stats untuk semua role

        $stats[] = Stat::make('Total Users', User::count())
            ->description('Registered users')
            ->icon('heroicon-o-users');

        $stats[] = Stat::make('Total Posts', Post::count())
            ->description('All published posts')
            ->icon('heroicon-o-document-text');

        $stats[] = Stat::make('Total Galleries', Gallery::count())
            ->description('All gallery items')
            ->icon('heroicon-o-photo');

        // Stats khusus finance untuk admin
        if ($user && in_array($user->role, ['admin', 'owner'])) {
            $income = Transaction::where('type', 'income')->sum('amount');
            $expense = Transaction::where('type', 'expense')->sum('amount');

            $stats[] = Stat::make('Total Income', '$' . number_format($income, 2))
                ->description('All income transactions')
                ->icon('heroicon-o-arrow-up-circle');

            $stats[] = Stat::make('Total Expense', '$' . number_format($expense, 2))
                ->description('All expense transactions')
                ->icon('heroicon-o-arrow-down-circle');

            $stats[] = Stat::make('Net Balance', '$' . number_format($income - $expense, 2))
                ->description('Current balance')
                ->color($income - $expense >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-currency-dollar');
        }

        return $stats;
    }
}
