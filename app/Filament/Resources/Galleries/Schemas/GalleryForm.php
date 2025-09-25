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
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('photo')
                    ->image()
                    ->required()
                    ->directory('galleries'),
                Select::make('gallery_category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }
}
