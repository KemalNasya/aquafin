<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class CashFlowChart extends ChartWidget
{
    protected ?string $heading = 'Grafik Arus Kas Bulanan';

    protected static string $colorIncome = '#10B981'; // Hijau pastel
    protected static string $colorExpense = '#EF4444'; // Merah pastel

    protected array $months = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    /**
     * Hanya tampil di halaman Report.
     */
    public static function canView(): bool
    {
        return request()->routeIs('filament.admin.pages.report');
    }

    protected function getData(): array
    {
        $transactions = Transaction::select(
            DB::raw('YEAR(transaction_date) as year'),
            DB::raw('MONTH(transaction_date) as month_num'),
            DB::raw("SUM(CASE WHEN type = 'income' THEN amount ELSE 0 END) as income"),
            DB::raw("SUM(CASE WHEN type = 'expense' THEN amount ELSE 0 END) as expense")
        )
        ->whereNotNull('transaction_date')
        ->groupBy('year', 'month_num')
        ->orderBy('year')
        ->orderBy('month_num')
        ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Pemasukan',
                    'data' => $transactions->pluck('income')->toArray(),
                    'backgroundColor' => static::$colorIncome,
                ],
                [
                    'label' => 'Pengeluaran',
                    'data' => $transactions->pluck('expense')->toArray(),
                    'backgroundColor' => static::$colorExpense,
                ],
            ],
            'labels' => $transactions->map(function ($t) {
                return $this->months[$t->month_num - 1] . ' ' . $t->year;
            })->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'chart' => [
                'toolbar' => ['show' => false],
                'animations' => [
                    'enabled' => true,
                    'easing' => 'easeinout',
                    'speed' => 800,
                ],
            ],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 8,
                    'horizontal' => false,
                    'columnWidth' => '55%',
                ],
            ],
            'dataLabels' => [
                'enabled' => true,
                'style' => [
                    'fontSize' => '12px',
                    'colors' => ['#333'],
                ],
                'formatter' => fn ($val) => $val > 0 ? number_format($val, 0, ',', '.') : '',
            ],
            'legend' => [
                'position' => 'bottom',
                'fontSize' => '14px',
                'labels' => ['colors' => '#555'],
            ],
            'grid' => [
                'borderColor' => '#e5e7eb',
                'strokeDashArray' => 4,
            ],
            'tooltip' => [
                'theme' => 'light',
                'y' => [
                    'formatter' => fn ($val) => 'Rp' . number_format($val, 0, ',', '.'),
                ],
            ],
            'xaxis' => [
                'labels' => [
                    'style' => [
                        'fontSize' => '13px',
                        'colors' => '#6b7280',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontSize' => '13px',
                        'colors' => '#6b7280',
                    ],
                ],
            ],
        ];
    }
}
