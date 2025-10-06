<?php

namespace App\Filament\Resources\Galleries\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use App\Filament\Resources\Galleries\GalleryResource;


class CreateGallery extends CreateRecord
{
    
        protected static string $resource = GalleryResource::class;
        public function getTitle(): string | Htmlable
        {
            return 'Tambah Postingan';
        }
    
        public function getBreadcrumb(): string
        {
            return 'Tambah Postingan';
        }
    
        protected function getRedirectUrl(): string
        {
            return static::getResource()::getUrl('index'); 
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
    
    

