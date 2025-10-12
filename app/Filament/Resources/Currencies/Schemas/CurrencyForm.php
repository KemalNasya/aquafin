<?php

namespace App\Filament\Resources\Currencies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CurrencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Mata Uang')
                    ->required()
                    ->helperText('(contoh: Rupiah Indonesia)'),
                TextInput::make('code')
                    ->label('Kode Mata Uang')
                    ->required()
                    ->maxLength(3)
                    ->rules(['max:3'])
                    ->helperText('contoh: IDR, USD, EUR)'),
                TextInput::make('symbol')
                    ->label('Simbol Mata Uang')
                    ->required()
                    ->maxLength(10)
                    ->rules(['max:10'])
                    ->helperText('(contoh: Rp, $, €)'),
                TextInput::make('exchange_rate')
                    ->label('Kurs Tukar')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(999999.9999)
                    ->default(1.0),
                Toggle::make('is_default')
                    ->label('Jadikan Default')
                    ->required(),
            ]);
    }
}
