<?php

namespace App\Filament\Resources\TransactionCategories\Pages;

use App\Filament\Resources\TransactionCategories\TransactionCategoryResource;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Posts\PostResource;
use Filament\Actions;
use Illuminate\Contracts\Support\Htmlable;

class CreateTransactionCategory extends CreateRecord
{
    protected static string $resource = TransactionCategoryResource::class;
    public function getTitle(): string | Htmlable
    {
        return 'Tambah Kategori Transaksi';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Kategori';
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index'); 
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Kategori berhasil ditambahkan!';
    }

    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('create')
                ->label('Simpan Postingan')
                ->submit('create')
                ->keyBindings(['mod+s']),

            Actions\Action::make('cancel')
                ->label('Batal')
                ->url(static::getResource()::getUrl('index')),
        ];
    }
}
