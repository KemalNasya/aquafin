<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Postingan')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $context, $state, Set $set) {
                        if ($context === 'create') {
                            $set('slug', Str::slug($state));
                        }
                    }),

                TextInput::make('slug')
                    ->label('URL Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->rules(['regex:/^[a-z0-9\-]+$/'])
                    ->validationMessages([
                        'regex' => 'Slug hanya boleh berisi huruf kecil, angka, dan tanda hubung (-).',
                    ])
                    ->helperText('URL / Link (hanya huruf kecil, angka, dan tanda hubung). Akan otomatis dibuat dari judul jika kosong.'),

                Textarea::make('content')
                    ->label('Isi Konten')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('thumbnail')
                    ->label('Gambar')
                    ->disk('public')
                    ->directory('posts')
                    ->image(),

                Select::make('post_category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name')
                    ->required(),

                Select::make('user_id')
                    ->label('Pengguna')
                    ->relationship('user', 'name')
                    ->required(),

                Toggle::make('is_published')
                    ->label('Tayang?')
                    ->required(),

                DateTimePicker::make('published_at')
                    ->label('Tanggal Publikasi'),
            ]);
    }
}
