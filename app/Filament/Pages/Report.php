<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsFinance;
use App\Filament\Widgets\CashFlowChart;
use BackedEnum;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class Report extends Page
{
    /** -------------------------------
     *  Navigasi & Konfigurasi Halaman
     *  ------------------------------*/
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $title = 'Laporan';
    protected static ?string $navigationLabel = 'Laporan';
    protected static ?int $navigationSort = 4;
    protected static string|UnitEnum|null $navigationGroup = 'Keuangan';
    protected string $view = 'filament.pages.report';

    /** -------------------------------
     *  Akses Role yang Diizinkan
     *  ------------------------------*/
    public static function canAccess(): bool
    {
        $user = Auth::user();
        return $user && in_array($user->role, ['admin', 'owner']);
    }

    /** -------------------------------
     *  Widget di Halaman Laporan
     *  ------------------------------*/
    protected function getHeaderWidgets(): array
    {
        return [
 
        ];
    }
}
