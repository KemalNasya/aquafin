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

        return $stats;
    }
}
