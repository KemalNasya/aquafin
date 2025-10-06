<?php

namespace App\Filament\Resources\PostCategories\Pages;

use App\Filament\Resources\PostCategories\PostCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreatePostCategory extends CreateRecord
{
    protected static string $resource = PostCategoryResource::class;

    public function getTitle(): string | Htmlable
    {
        return 'Tambah Kategori';
    }

    public function getBreadcrumb(): string
    {
        return 'Tambah Kategori';
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
            ->label('Simpan Kategori')
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
        return 'Kategori berhasil ditambahkan!';
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
