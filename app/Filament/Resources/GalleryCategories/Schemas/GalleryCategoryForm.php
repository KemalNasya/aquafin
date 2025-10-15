<?php

namespace App\Filament\Resources\GalleryCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class GalleryCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Kategori')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $context, $state, Set $set) {
                        if ($context === 'create') {
                            $set('slug', Str::slug($state));
                        }
                    }),

                TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->rules(['regex:/^[a-z0-9\-]+$/'])
                    ->validationMessages([
                        'regex' => 'Slug hanya boleh berisi huruf kecil, angka, dan tanda hubung (-).',
                    ])
                    ->helperText('URL kategori (dibuat otomatis dari nama, bisa diubah manual)'),
            ]);
    }
}
