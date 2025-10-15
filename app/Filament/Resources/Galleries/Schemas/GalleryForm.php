<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Foto')
                    ->required()
                    ->validationMessages([
                        'required' => 'Judul foto harus diisi.',
                    ]),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->required()
                    ->validationMessages([
                        'required' => 'Deskripsi harus diisi.',
                    ]),

                FileUpload::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->directory('galleries')
                    ->image()
                    ->maxSize(2048) // 2MB
                    ->required()
                    ->validationMessages([
                        'required' => 'Foto harus diisi dan tidak boleh kosong!',
                        'image' => 'File yang diunggah harus berupa gambar.',
                        'max' => 'Ukuran file maksimal 2MB.',
                    ]),

                Select::make('gallery_category_id')
                    ->label('Kategori Foto')
                    ->relationship('category', 'name')
                    ->required()
                    ->validationMessages([
                        'required' => 'Kategori harus dipilih.',
                    ]),

                Select::make('user_id')
                    ->label('Pengguna')
                    ->relationship('user', 'name')
                    ->required()
                    ->validationMessages([
                        'required' => 'Pengguna harus dipilih.',
                    ]),
            ]);
    }
}
