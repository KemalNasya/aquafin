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
                    ->rules(['required', 'string', 'max:255']),
                TextInput::make('email')
                    ->label('Alamat Email')
                    ->email()
                    ->required()
                    ->rules(['required', 'email', 'unique:users,email,{$record->id}']),
                DateTimePicker::make('email_verified_at')
                    ->label('Email Diverifikasi Pada'),
                Select::make('role')
                    ->label('Peran')
                    ->options(['admin' => 'Admin', 'owner' => 'Owner'])
                    ->default('admin')
                    ->required(),
                TextInput::make('current_password')
                    ->label('Kata Sandi Saat Ini')
                    ->password()
                    ->requiredWith('password')
                    ->rules(['required_with:password']),
                TextInput::make('password')
                    ->label('Kata Sandi Baru')
                    ->password()
                    ->minLength(8)
                    ->rules(['nullable', 'string', 'min:8', 'confirmed'])
                    ->helperText('Minimal 8 karakter'),
                TextInput::make('password_confirmation')
                    ->label('Konfirmasi Kata Sandi Baru')
                    ->password()
                    ->requiredWith('password')
                    ->rules(['required_with:password']),
            ])
            ->columns(1);
    }
}
