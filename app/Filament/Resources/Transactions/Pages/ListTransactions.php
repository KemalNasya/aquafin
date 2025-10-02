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
            Actions\CreateAction::make(),

            Actions\ActionGroup::make([
                Actions\Action::make('Excel')
                    ->label('Export Excel')
                    ->icon('heroicon-o-document-text')
                    ->url(route('admin.report.exportExcel'))
                    ->openUrlInNewTab(),

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
