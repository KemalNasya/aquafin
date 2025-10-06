<?php

namespace App\Filament\Resources\Transactions\Pages;

use App\Filament\Resources\Transactions\TransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Transaksi')
                ->icon('heroicon-m-plus'),

            Actions\ActionGroup::make([
                // ✅ HANYA PDF YANG TERSISA
                Actions\Action::make('PDF')
                    ->label('Export PDF')
                    ->icon('heroicon-o-document')
                    ->url(route('admin.report.exportPdf'))
                    ->openUrlInNewTab(),
            ])
                ->label('Export')
                ->icon('heroicon-o-arrow-down-tray')
                ->button(),
        ];
    }
}