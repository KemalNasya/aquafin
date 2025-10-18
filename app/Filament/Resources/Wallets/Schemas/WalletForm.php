<?php

namespace App\Filament\Resources\Wallets\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Placeholder;
use Filament\Schemas\Schema;

class WalletForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('nama dompet')
                    ->required()
                    ->unique(table: 'wallets', column: 'name', ignoreRecord: true)
                    ->validationMessages(['unique' => 'Nama wallet sudah digunakan. Silakan gunakan nama lain.']),
                Placeholder::make('total_saldo')
                    ->label('Total Saldo')
                    ->content(function ($record) {
                        return $record ? number_format($record->total_saldo, 2) : '0.00';
                    }),
                Select::make('currency_id')
                    ->label('Mata Uang')
                    ->relationship('currency', 'name', function ($query) {
                        return $query->where('is_default', true);
                    })
                    ->required(),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->required(),
            ]);
    }
}
