<?php

namespace App\Filament\Resources\Transactions\Pages;

use App\Filament\Resources\Transactions\TransactionResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions;
use Illuminate\Contracts\Support\Htmlable;

class CreateTransaction extends CreateRecord
{
    protected static string $resource = TransactionResource::class;

    public function getTitle(): string | Htmlable
    {
        return 'Tambah Transaksi';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Transaksi';
    }

    /**
     * 🔥 Disable default "Create & Create Another" button
     */
    protected function hasSaveAndCreateAnotherFormAction(): bool
    {
        return false;
    }

    protected function getCreateFormAction(): Actions\Action
    {
        return Actions\Action::make('create')
            ->label('Simpan')
            ->submit('create')
            ->keyBindings(['mod+s']);
    }

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),

            Actions\Action::make('cancel')
                ->label('Batal')
                ->url(static::getResource()::getUrl('index')),
        ];
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Transaksi berhasil ditambahkan!';
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
