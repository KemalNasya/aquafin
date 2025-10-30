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


        $stats[] = Stat::make('Total Pengguna', User::count())
            ->description('Pengguna terdaftar')
            ->icon('heroicon-o-users');

        $stats[] = Stat::make('Total Postingan', Post::count())
            ->description('postingan artikel')
            ->icon('heroicon-o-document-text');

        $stats[] = Stat::make('Total Galeri', Gallery::count())
            ->description('Semua item galeri')
            ->icon('heroicon-o-photo');

        return $stats;
    }
}
