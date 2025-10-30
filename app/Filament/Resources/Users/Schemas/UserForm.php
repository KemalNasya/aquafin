<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->rules(['required', 'string', 'max:255'])
                    ->visible(fn ($context) => $context === 'edit'),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->rules(['required', 'email', 'unique:users,email,{$record->id}'])
                    ->visible(fn ($context) => $context === 'edit'),
                TextInput::make('current_password')
                    ->label('Kata Sandi Saat Ini')
                    ->password()
                    ->requiredWith('password')
                    ->rules(['required_with:password'])
                    ->visible(fn ($context) => $context === 'edit'),
            ])
            ->columns(1);
    }
}
