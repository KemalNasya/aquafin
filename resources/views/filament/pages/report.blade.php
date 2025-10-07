<x-filament-panels::page>
    <div class="space-y-10">

        {{-- Bagian Ringkasan Keuangan --}}
        <section>
            <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">
                Ringkasan Keuangan
            </h2>
            <x-filament-widgets::widgets
                :widgets="[\App\Filament\Widgets\StatsFinance::class]"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
            />
        </section>

        {{-- Bagian Grafik Arus Kas --}}
        <section>
            <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">
                Arus Kas Bulanan
            </h2>
            <x-filament-widgets::widgets
                :widgets="[\App\Filament\Widgets\CashFlowChart::class]"
                class="grid grid-cols-1"
            />
        </section>

    </div>

    {{-- Script wajib ada di dalam root tag --}}
    @push('scripts')
        {{-- Plugin Chart.js Data Labels --}}
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0"></script>

        {{-- Aktifkan plugin datalabels untuk semua chart Filament --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (window.Chart && window.Chart.register) {
                    Chart.register(ChartDataLabels);
                }
            });
        </script>
    @endpush
</x-filament-panels::page>
