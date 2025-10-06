<?php

namespace App\Filament\Resources\Currencies\Pages;

use App\Filament\Resources\Currencies\CurrencyResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions;
use Illuminate\Contracts\Support\Htmlable;

class CreateCurrency extends CreateRecord
{
    protected static string $resource = CurrencyResource::class;

    public function getTitle(): string | Htmlable
    {
        return 'Tambah Mata Uang';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah ';
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
        return 'Mata Uang berhasil ditambahkan!';
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
